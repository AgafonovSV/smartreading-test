<?php

namespace Database\Seeders;

use Carbon\Carbon;

use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();

        $createdDate = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('groups')->insert([
            ['id' => 1, 'name' => 'Group_1', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 2, 'name' => 'Group_2', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 3, 'name' => 'Group_3', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 4, 'name' => 'Group_4', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 5, 'name' => 'Group_5', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 6, 'name' => 'Group_6', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 7, 'name' => 'Group_7', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 8, 'name' => 'Group_8', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 9, 'name' => 'Group_9', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 10, 'name' => 'Group_10', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 11, 'name' => 'Group_11', 'parent_id' =>null, 'created_at' => $createdDate],
            ['id' => 12, 'name' => 'Group_12', 'parent_id' => null, 'created_at' => $createdDate],
            ['id' => 13, 'name' => 'Group_3_1', 'parent_id' => 3, 'created_at' => $createdDate],
            ['id' => 14, 'name' => 'Group_4_1', 'parent_id' => 4, 'created_at' => $createdDate],
            ['id' => 15, 'name' => 'Group_5_1', 'parent_id' => 5, 'created_at' => $createdDate],
            ['id' => 16, 'name' => 'Group_6_1', 'parent_id' => 6, 'created_at' => $createdDate],
            ['id' => 17, 'name' => 'Group_7_1', 'parent_id' => 7, 'created_at' => $createdDate],
            ['id' => 18, 'name' => 'Group_8_1', 'parent_id' => 8, 'created_at' => $createdDate],
            ['id' => 19, 'name' => 'Group_8_2', 'parent_id' => 8, 'created_at' => $createdDate],
            ['id' => 20, 'name' => 'Group_9_1', 'parent_id' => 9, 'created_at' => $createdDate],
            ['id' => 21, 'name' => 'Group_9_2', 'parent_id' => 9, 'created_at' => $createdDate],
            ['id' => 22, 'name' => 'Group_10_1', 'parent_id' => 10, 'created_at' => $createdDate],
            ['id' => 23, 'name' => 'Group_10_2', 'parent_id' => 10, 'created_at' => $createdDate],
            ['id' => 24, 'name' => 'Group_11_1', 'parent_id' => 11, 'created_at' => $createdDate],
            ['id' => 25, 'name' => 'Group_11_2', 'parent_id' => 11, 'created_at' => $createdDate],
            ['id' => 26, 'name' => 'Group_12_1', 'parent_id' => 12, 'created_at' => $createdDate],
            ['id' => 27, 'name' => 'Group_12_2', 'parent_id' => 12, 'created_at' => $createdDate],
            ['id' => 28, 'name' => 'Group_8_1_1', 'parent_id' => 18, 'created_at' => $createdDate],
            ['id' => 29, 'name' => 'Group_8_1_2', 'parent_id' => 18, 'created_at' => $createdDate],
            ['id' => 30, 'name' => 'Group_8_2_1', 'parent_id' => 19, 'created_at' => $createdDate],
            ['id' => 31, 'name' => 'Group_8_2_2', 'parent_id' => 19, 'created_at' => $createdDate],
            ['id' => 32, 'name' => 'Group_9_1_1', 'parent_id' => 20, 'created_at' => $createdDate],
            ['id' => 33, 'name' => 'Group_9_1_2', 'parent_id' => 20, 'created_at' => $createdDate],
            ['id' => 34, 'name' => 'Group_9_2_1', 'parent_id' => 21, 'created_at' => $createdDate],
            ['id' => 35, 'name' => 'Group_9_2_2', 'parent_id' => 21, 'created_at' => $createdDate],
            ['id' => 36, 'name' => 'Group_10_1_1', 'parent_id' => 22, 'created_at' => $createdDate],
            ['id' => 37, 'name' => 'Group_10_1_2', 'parent_id' => 22, 'created_at' => $createdDate],
            ['id' => 38, 'name' => 'Group_10_2_1', 'parent_id' => 23, 'created_at' => $createdDate],
            ['id' => 39, 'name' => 'Group_10_2_2', 'parent_id' => 23, 'created_at' => $createdDate],
            ['id' => 40, 'name' => 'Group_11_1_1', 'parent_id' => 24, 'created_at' => $createdDate],
            ['id' => 41, 'name' => 'Group_11_1_2', 'parent_id' => 24, 'created_at' => $createdDate],
            ['id' => 42, 'name' => 'Group_11_2_1', 'parent_id' => 25, 'created_at' => $createdDate],
            ['id' => 43, 'name' => 'Group_11_2_2', 'parent_id' => 25, 'created_at' => $createdDate],
            ['id' => 44, 'name' => 'Group_12_1_1', 'parent_id' => 26, 'created_at' => $createdDate],
            ['id' => 45, 'name' => 'Group_12_1_2', 'parent_id' => 26, 'created_at' => $createdDate],
            ['id' => 46, 'name' => 'Group_12_2_1', 'parent_id' => 27, 'created_at' => $createdDate],
            ['id' => 47, 'name' => 'Group_12_2_2', 'parent_id' => 27, 'created_at' => $createdDate],
        ]);

        $childGroupArr = [];
        $groups = Group::all()->toArray(); 
        $usersIds = DB::table('users')->pluck('id')->toArray();
        $groupsParents = array_values(array_unique(array_column($groups, 'parent_id')));
    
        foreach ($groups as $group) {
            if(!in_array($group['id'], $groupsParents)) {
                $childGroupArr[] = $group['id'];            
            }
        }

        foreach ($childGroupArr as $groupId) {

            $randUsers = (array) array_rand($usersIds, rand(1, 3));
    
            foreach ($randUsers as $userIdKey) {
                $setDbArr[] = ['group_id' => $groupId, 'user_id' => $usersIds[$userIdKey]];
            }
        }

        DB::table('group_user')->insert($setDbArr);

    }
}
