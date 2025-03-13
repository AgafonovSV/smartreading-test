<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
            DB::raw('
                concat_ws("", 
                    IF(isnull(group_user.group_id), 
                        (select 
                            concat("[", 
                                group_concat(( 
                                    select group_concat(
                                        json_object( 
                                            "id", u1.id, 
                                            "name", u1.name 
                                        )
                                    ) 
                                    from group_user 
                                    left join users u1 ON u1.id = group_user.user_id 
                                    where group_user.group_id = g.id 
                                )), 
                            "]") 
                            from `groups` as g 
                            where g.parent_id = groups.id
                        ), 
                        concat("[", 
                            group_concat(
                                json_object( 
                                    "id", users.id, 
                                    "name", users.name 
                                )
                            ), 
                        "]") 
                    ), 
                    IF(isnull(group_user.group_id) or isnull(groups.parent_id), 
                        (select 
                            concat("[", 
                                group_concat(( 
                                    select group_concat(
                                        json_object(
                                            "id", u2.id, 
                                            "name", u2.name
                                        )
                                    ) 
                                    from group_user 
                                    left join users u2 ON u2.id = group_user.user_id 
                                    where group_user.group_id = g3.id 
                                )), 
                            "]") 
                            from `groups` g 
                            left join `groups` g3 ON g3.parent_id = g.id 
                            where g.parent_id = groups.id 
                        ), null
                    )
                ) as users 
            ')
        )
        ->groupBy('groups.id')
        ->get()->toArray();

        return view('groups', [
            'groupsArr' => $this->makeTree($this->objectToArray($groups))
        ]);
    }

    public function makeTree($items, $root = null): array 
    {
        $nitems = [];

        foreach ($items as $ki => $item) {

            if (is_string($item['users']) ) {
                $users =  json_decode($item['users'], true);
            } else {
                $users = $item['users'];
            } 
            
            $item['users'] = array_unique($users, SORT_REGULAR);

            $ki++;

            if ($item['group_parent_id'] == $root && $ki != $item['group_parent_id']) {
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
