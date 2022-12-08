<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use App\Models\User;
use App\Helpers\Helper;
use App\Models\deposit;
use App\Models\transaction;
use App\Enums\TransacTypes;
use Illuminate\Support\Facades\Log;


class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function userlevel($user_code){
        $child_count = User::where('parent_code', $user_code)->where('status', 'approved')->count();
        Log::info(print_r($child_count, true));
        // return $child_count;
        if($child_count <= 10){ return 1; }
        elseif($child_count > 10 &&  $child_count <= 20){ return 2;}
        elseif($child_count > 20 &&  $child_count <= 30){ return 3;}
        elseif($child_count > 30){ return 4;}

    }

    public static function todayEarning($user_id){
       $earning = Transaction::where('user_id', $user_id)->where('status', TransacTypes::DailyEarning)->sum('amount');
       return round($earning,4) ?? 0;
    }

    public static function dirctRefBouns($user_id){
        $earning = Transaction::where('user_id', $user_id)->where('status', TransacTypes::ReferalBouns)->sum('amount');
        return round($earning,4)?? 0;
    }

    public static function matchingBouns($user_id){
        $earning = Transaction::where('user_id', $user_id)->where('status', TransacTypes::MatchindBonus)->sum('amount');
        return round($earning,4)?? 0;
    }

    public static function teamCommission($user_id){
        $earning = Transaction::where('user_id', $user_id)->where('status', TransacTypes::TeamCommission)->sum('amount');
        return round($earning,4) ?? 0;
    }

    public static function totalRearning($user_id){
        $earning = Transaction::where('user_id', $user_id)->where('deposit', true)->sum('amount');
        return round($earning,4) ?? 0;

    }

    public static function totalWidtdraw($user_id){
        $earning = Transaction::where('user_id', $user_id)->where('withdraw', true)->sum('amount');
        return round($earning,4)  ?? 0;

    }

    public static function isApproved($user_id){
        $deposit = Deposit::where('user_id', $user_id)->where();
    }

}
