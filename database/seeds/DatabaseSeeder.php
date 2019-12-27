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
        DB::table('types')->insert([
            [
                'name' => 'Cho thuê',
            ],
            [
                'name' => 'Cho Bán',
            ],
        ]);
        DB::table('features')->insert([
            [
                'name' => 'Nhà bếp',
                'slug_name' => 'nha-bep',
            ],
            [
                'name' => 'Giường ngủ',
                'slug_name' => 'giuong-ngu',
            ],
            [
                'name' => 'Tivi',
                'slug_name' => 'tivi',
            ],
            [
                'name' => 'Phòng tắm',
                'slug_name' => 'phong-tam',
            ],
            [
                'name' => 'Chỗ để xe',
                'slug_name' => 'cho-de-xe',
            ],
            [
                'name' => 'Ban công',
                'slug_name' => 'ban-cong',
            ],
            [
                'name' => 'Điều hòa',
                'slug_name' => 'dieu-hoa',
            ],
            [
                'name' => 'Bể bơi',
                'slug_name' => 'be-boi',
            ],
            [
                'name' => 'Lò sưởi',
                'slug_name' => 'lo-suoi',
            ],
        ]);
    }
}
