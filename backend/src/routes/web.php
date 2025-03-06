<?php

use Illuminate\Support\Facades\Route;
use App\Models\Group;


Route::get("/", function () {

    $childGroupArr = [];
    $groups = Group::all()->toArray(); 
    $parentsArr = array_values(array_unique(array_column($groups, 'parent_id')));

    foreach ($groups as $group) {
        if(! in_array($group['id'], $parentsArr)) {
            $childGroupArr[] = [
                'id' => $group['id'],
                'name' => $group['name'],
                'parent_id' => $group['parent_id']
            ];            
        }
    }

    echo '<pre>';
    print_r($childGroupArr);

});
