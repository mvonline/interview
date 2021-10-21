<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cards extends Model
{
    use HasFactory,softDeletes;

    protected $table = "cards";
    protected $fillable = [
        'user_id',
        'card_no',
        'pass_code',
        'expire_date',
        'is_active'
    ];
}
