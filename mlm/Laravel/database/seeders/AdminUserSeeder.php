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
            'email' => 'ytMCash@aDminUser45',
            'password' => Hash::make('ytMCash@aDminUser45'),
            'fund_password' => Hash::make('ytMCash@aDminUser45'),
            'user_name' => 'admin',
            'phone' => 123456789
        ]);
    }
}
