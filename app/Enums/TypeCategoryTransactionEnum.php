<?php

namespace App\Enums;

enum TypeCategoryTransactionEnum: string
{
    case SUPERMARKET = 'supermarket';
    case LEISURE = 'leisure';

    public static function getValues(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }

    public function label(): string 
    {
        return match ($this){
            self::SUPERMARKET => 'Mercado',
            self::LEISURE => 'Lazer',
        };
    }
}
