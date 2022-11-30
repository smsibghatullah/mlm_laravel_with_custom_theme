<?php

namespace App\Enums;

enum TransacTypes:string {
    case Manual = 'manual';
    case DailyEarning = 'dailyearning';
    case ReferalBouns = 'referal_bonus';
    case MatchindBonus = 'matchin_bouns';
}

