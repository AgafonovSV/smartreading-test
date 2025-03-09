<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Group;
use App\Models\User;
use Illuminate\View\View;

class GroupController extends Controller
{
    public function showSql(): View
    {
        
        $groups = DB::table('groups')
        ->leftJoin('group_user', 'groups.id', '=', 'group_user.group_id')
        ->leftJoin('users', 'users.id', '=', 'group_user.user_id')
        ->select(
            'groups.id as group_id', 
            'group_user.group_id as group_user_group_id', 
            'groups.name as group_name', 
            'groups.parent_id as group_parent_id',
            DB::raw('CONCAT_WS("", 
                        IF(group_user.group_id IS NULL,
                            (SELECT CONCAT("[",
                                    GROUP_CONCAT((
                                        SELECT GROUP_CONCAT(
                                            JSON_OBJECT(
                                                "id", u1.id,
                                                "name", u1.name
                                            )
                                        ) 
                                        FROM group_user 
                                        INNER JOIN users u1 ON u1.id = group_user.user_id
                                        WHERE group_user.group_id = g.id
                                    )),
                                "]") 
                            FROM `groups` as g
                            WHERE g.parent_id = groups.id
                        ),
                        NULL
                    ),
                        IF(group_user.group_id IS NULL and groups.parent_id IS NULL,
                            (SELECT CONCAT("[",
                                    GROUP_CONCAT((
                                        SELECT GROUP_CONCAT(
                                            JSON_OBJECT(
                                                "id", u2.id,
                                                "name", u2.name
                                            )
                                        ) 
                                        FROM group_user 
                                        LEFT JOIN users u2 ON u2.id = group_user.user_id
                                        WHERE group_user.group_id = g3.id
                                    )),
                                "]") 
                            FROM `groups` g 
                            LEFT JOIN `groups` g3 ON g3.parent_id = g.id 
                            WHERE g.parent_id = groups.id
                        ),
                        CONCAT("[",
                            GROUP_CONCAT(
                                JSON_OBJECT(
                                    "id", users.id,
                                    "name", users.name
                                )
                            ),
                        "]")
                    )) as users
            ')
        )
        ->groupBy('groups.id')
        ->get()->toArray();
        
        //echo '<pre>';
        //print_r($this->makeTree($this->objectToArray($groups)));

        return view('groups', [
            'groupsArr' => $this->makeTree($this->objectToArray($groups))
        ]);

    }

    public function makeTree($items, $root = null) {

        $nitems = [];

        foreach($items as $ki => $item) {

            $item['users'] = is_string($item['users']) ? json_decode(str_replace('[{"id": null, "name": null}]', '', $item['users']), true) : $item['users'];

            $ki++;

            if($item['group_parent_id'] == $root && $ki != $item['group_parent_id']) {
                unset($items[$ki]);
                $children = $this->makeTree($items, $ki);
                $nitems[$ki] = $item + ['children' => !empty($children) ? $children : null];
                continue;
            }
        }

        return $nitems;
    }    

    public function objectToArray($data): array
    {
        $result = [];

        foreach ($data as $key => $value)
        {
            $result[$key] = (is_array($value) || is_object($value)) ? $this->objectToArray($value) : $value;
        }

        return $result;
    }
}
