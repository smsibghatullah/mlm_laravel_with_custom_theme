<?php

namespace App\Enums;

enum TransacTypes:string {
    case Manual = 'manual';
    case DailyEarning = 'dailyearning';
    case ReferalBouns = 'referal_bonus';
    case MatchindBonus = 'matchin_bouns';
    case TeamCommission = 'team_commission';
    case HalfLevel = 'half_level_commission';
    case FulLevel = 'ful_level_commission';
}

