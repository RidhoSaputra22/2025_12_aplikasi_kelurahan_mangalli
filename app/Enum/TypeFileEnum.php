<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum TypeFileEnum: string implements HasLabel
{
    case IMAGE = 'IMAGE';
    case VIDEO = 'VIDEO';

    public static function values(): array
    {
        return [
            self::IMAGE,
            self::VIDEO,
        ];
    }

    public function getlabel(): string
    {
        return match ($this) {
            self::IMAGE => 'IMAGE',
            self::VIDEO => 'VIDEO',
        };
    }
}
