<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('settings')->insert( ['key' =>'level1_daily_earning' , 'value' =>'0.5' ] );
            DB::table('settings')->insert( ['key' =>'level1_direct_ref_bonus' , 'value' => '5'] );
            DB::table('settings')->insert( ['key' =>'level1_daily_team_commission' , 'value' =>'7' ] );
            DB::table('settings')->insert( ['key' =>'level1_half_level_completion_bonus' , 'value' =>'5' ] );
            DB::table('settings')->insert( ['key' =>'level1_completion_bonus' , 'value' =>'10' ] );
            DB::table('settings')->insert( ['key' =>'level1_maching_bonus' , 'value' =>'5' ] );
            DB::table('settings')->insert( ['key' =>'level2_daily_earning' , 'value' =>'0.6' ] );
            DB::table('settings')->insert( ['key' =>'level2_direct_ref_bonus' , 'value' => '5'] );
            DB::table('settings')->insert( ['key' =>'level2_daily_team_commission' , 'value' =>'7' ] );
            DB::table('settings')->insert( ['key' =>'level2_half_level_completion_bonus' , 'value' =>'5' ] );
            DB::table('settings')->insert( ['key' =>'level2_completion_bonus' , 'value' =>'13' ] );
            DB::table('settings')->insert( ['key' =>'level2_maching_bonus' , 'value' =>'5' ] );
            DB::table('settings')->insert( ['key' =>'level3_daily_earning' , 'value' =>'0.73' ] );
            DB::table('settings')->insert( ['key' =>'level3_direct_ref_bonus' , 'value' => '5'] );
            DB::table('settings')->insert( ['key' =>'level3_daily_team_commission' , 'value' =>'7' ] );
            DB::table('settings')->insert( ['key' =>'level3_half_level_completion_bonus' , 'value' =>'7' ] );
            DB::table('settings')->insert( ['key' =>'level3_completion_bonus' , 'value' =>'15' ] );
            DB::table('settings')->insert( ['key' =>'level3_maching_bonus' , 'value' =>'5' ] );
            DB::table('settings')->insert( ['key' =>'level4_daily_earning' , 'value' =>'0.83' ] );
            DB::table('settings')->insert( ['key' =>'level4_direct_ref_bonus' , 'value' => '5'] );
            DB::table('settings')->insert( ['key' =>'level4_daily_team_commission' , 'value' =>'7' ] );
            DB::table('settings')->insert( ['key' =>'level4_half_level_completion_bonus' , 'value' =>'7' ] );
            DB::table('settings')->insert( ['key' =>'level4_completion_bonus' , 'value' =>'18' ] );
            DB::table('settings')->insert( ['key' =>'level4_maching_bonus' , 'value' =>'5' ] );

    }
}
