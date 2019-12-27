<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id'       => 1,
                'name'          => 'Admin',
                'email'         => 'admin@admin.com',
                'avatar'         => 'default.png',
                'password'      => bcrypt('123456'),
                'phone'         => '0123123123',
                'isActive'      => '1',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'role_id'       => 2,
                'name'          => 'User',
                'email'         => 'user@user.com',
                'avatar'         => 'default.png',
                'password'      => bcrypt('123456'),
                'phone'         => '0123123123',
                'isActive'      => '1',
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);
        DB::table('roles')->    insert([
            [
                'name'          => 'Admin',
                'slug_name'     => 'admin',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'          => 'User',
                'slug_name'     => 'user',
                'created_at'    => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
