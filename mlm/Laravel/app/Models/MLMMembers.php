<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlmMembers extends Model
{
    use HasFactory;
    protected $guarded = [];  

/**
 * The "booting" method of the model.
 *
 * @return void
 */
protected static function boot()
{
    parent::boot();

    // auto-sets values on creation
    static::creating(function ($query) {
        $code = MlmMembers::all()->max('id')+1;
        $query->active = $query->active ?? true;
        $query->code = $code;
    });
}
}
