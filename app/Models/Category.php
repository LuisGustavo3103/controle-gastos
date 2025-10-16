<?php

namespace App\Models;

use App\Enums\TypeCategoryTransactionEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'type',
    ];

    protected $casts = [
        'type' => TypeCategoryTransactionEnum::class,
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
