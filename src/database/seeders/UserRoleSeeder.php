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
                'slug' => Str::slug('Admin')
            ]
        );
        DB::table('user_roles')->insert(
            [
                'name' => 'Moderator',
                'slug' => Str::slug('Moderator')
            ]
        );
        DB::table('user_roles')->insert(
            [
                'name' => 'Client',
                'slug' => Str::slug('Client'),
                'is_open_registration' => 'true'
            ]
        );
        DB::table('user_roles')->insert(
            [
                'name' => 'Designer',
                'slug' => Str::slug('Designer'),
                'is_open_registration' => 'true'
            ]
        );
        DB::table('user_roles')->insert(
            [
                'name' => 'Affiliate',
                'slug' => Str::slug('Affiliate'),
                'is_open_registration' => 'true'
            ]
        );
    }
}
