<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Group;
use App\Models\User;
use App\Http\Controllers\GroupController;


Route::get('/group/sql', [GroupController::class, 'showSql']);

Route::get("/", function () {

    $groups = Group::find(1);
    
    foreach ($groups->users as $user) {
        echo '<pre>';
        print_r($user->name);
    }

    echo '<pre>';
    //print_r($groups);
    //print_r($groups);


});
