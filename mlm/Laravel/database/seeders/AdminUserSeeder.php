<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name' => Str::random(10),
            'code' => Str::random(10),
            'is_admin' => true,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'fund_password' => Hash::make('123456'),
            'user_name' => 'admin',
            'phone' => 123456789
        ]);
    }
}
