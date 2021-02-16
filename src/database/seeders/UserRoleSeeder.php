<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRoles = [
            [
                'name' => 'Admin',
                'slug' => Str::slug('Admin')
            ],
            [
                'name' => 'Moderator',
                'slug' => Str::slug('Moderator')
            ],
            [
                'name' => 'Client',
                'slug' => Str::slug('Client'),
                'is_open_registration' => 'true'
            ],
            [
                'name' => 'Designer',
                'slug' => Str::slug('Designer'),
                'is_open_registration' => 'true'
            ],
            [
                'name' => 'Affiliate',
                'slug' => Str::slug('Affiliate'),
                'is_open_registration' => 'true'
            ]
        ];

        if (DB::table('user_roles')->get()->count() <= 0) {
            DB::table('user_roles')->insert($userRoles);
        }
    }
}
