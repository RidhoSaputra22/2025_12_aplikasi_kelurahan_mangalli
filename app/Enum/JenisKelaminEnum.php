<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum JenisKelaminEnum: string implements HasLabel
{
    case L = 'L';
    case P = 'P';

    public static function values(): array
    {
        return [
            self::L,
            self::P,
        ];
    }

    public function getlabel(): string
    {
        return match ($this) {
            self::L => 'Laki - laki',
            self::P => 'Perempuan',
        };
    }
}
