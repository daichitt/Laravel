<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'あああ',
            'email' => 'testqqq@test.com',
            'password' => Hash::make('password1234'),
            ],[
            'name' => 'いいい',
            'email' => 'test2qqq@test.com',
            'password' => Hash::make('password1235'),
            ]
        ]);
    }
}
