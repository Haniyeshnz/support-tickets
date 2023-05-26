<?php

namespace App\Enums;

enum    PriorityEnum: string
{
    case High = 'high';
    case Medium = 'medium';
    case Low = 'low';

    public static function option()
    {
        return [
            'high' => 'high',
            'medium' => 'medium',
            'low' => 'low',
        
        ];
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
        // ["deposit" => "Deposit", "withdraw" => "Withdraw"]
    }
}
