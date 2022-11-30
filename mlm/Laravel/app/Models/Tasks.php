<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TaskStatus;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status'];

    protected $casts = [
        'status' => TaskStatus::class
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
