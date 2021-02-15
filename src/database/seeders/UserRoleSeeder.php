<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert(
            [
                'name' => 'Admin',
            ]
        );
        DB::table('user_roles')->insert(
            [
                'name' => 'Moderator',
            ]
        );
        DB::table('user_roles')->insert(
            [
                'name' => 'Client',
            ]
        );
        DB::table('user_roles')->insert(
            [
                'name' => 'Designer',
            ]
        );
        DB::table('user_roles')->insert(
            [
                'name' => 'Affiliate',
            ]
        );
    }
}
