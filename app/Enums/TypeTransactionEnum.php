<?php

namespace App\Enums;

enum TypeTransactionEnum: string
{
    case RECEIVED = 'recebido';
    case SENT = 'enviado';

    public static function getValues(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }

    public function label(): string 
    {
        return match ($this){
            self::RECEIVED => 'Recebido',
            self::SENT => 'Enviado',
        };
    }
}
