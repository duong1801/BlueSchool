<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lê Dương',
            'email' => 'duongx1901@gmail.com',
            'password' => Hash::make('khongbietb1'),
            'phone' => '0123233',
            'adress' => '22/61 Lạc Trung, Hai Bà Trưng, Hà Nội',
            'role_id'=>'1'
        ]);
        User::create([
            'name' => 'Bùi Nguyện',
            'email' => 'phongcachmaytinh@gmail.com',
            'password' => Hash::make('123123123'),
            'phone' => '02123233',
            'adress' => '22/61 Lạc Trung, Hai Bà Trưng, Hà Nội',
            'role_id'=>'3'
        ]);
        User::create([
            'name' => 'Lê Huyền Anh',
            'email' => 'huyenanh0105@gmail.com',
            'password' => Hash::make('123123123'),
            'phone' => '03123233',
            'adress' => '22/61 Lạc Trung, Hai Bà Trưng, Hà Nội',
            'role_id'=>'2'
        ]);
    }
}
