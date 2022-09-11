<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
                'name' => '細谷　祐太',
                'email' => 'choukaisanw0626@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password0'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 1
            ],
            [
                'name' => '山田　太郎',
                'email' => 'yamada.taro@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ],
            [
                'name' => '鈴木　太郎',
                'email' => 'suzuki.taro@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ],
            [
                'name' => '佐藤　花子',
                'email' => 'sato.hanako@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ],
            [
                'name' => '佐々木　小次郎',
                'email' => 'sasaki.kojiro@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ],
            [
                'name' => '範馬　刃牙',
                'email' => 'hannma.baki@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ],
            [
                'name' => '長澤　まさみ',
                'email' => 'nagasawa.masami@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ],
            [
                'name' => 'うずまき　ナルト',
                'email' => 'uzumaki.naruto@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ],
            [
                'name' => '幕内　一歩',
                'email' => 'makunouti.ippo@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ],
            [
                'name' => '緑谷　出久',
                'email' => 'midoriya.izuku@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'del_flg' => 0
            ]
        ]);

    }
}
