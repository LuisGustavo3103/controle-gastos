<?php

namespace App\Models;

use App\Enums\TypeTransactionEnum;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'description',
        'amount',
        'type',
        'date'
    ];

    protected $casts = [
        'type' => TypeTransactionEnum::class,
    ];
}
