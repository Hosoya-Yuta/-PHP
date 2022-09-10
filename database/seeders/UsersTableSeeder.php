<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            'name' => '細谷　祐太',
            'email' => 'choukaisanw0626@gmail.com',
            'password' => Hash::make('1111'),
            'del_flg' => 1
        ]);

    }
}
