<?php

namespace App\Models;

use App\Enums\TypeTransactionEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'description',
        'amount',
        'type',
        'date'
    ];

    protected $casts = [
        'type' => TypeTransactionEnum::class,
        'date' => 'datetime'
    ];
}
