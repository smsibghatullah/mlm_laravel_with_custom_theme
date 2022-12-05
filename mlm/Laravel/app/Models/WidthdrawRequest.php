<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WidthdrawRequest extends Model
{
    use HasFactory;
    protected $table = 'widthdraw_request';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
