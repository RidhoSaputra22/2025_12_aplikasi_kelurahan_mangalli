<?php

namespace App\Filament\Resources\GaleriDesas\Schemas;

use App\Enum\TypeFileEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GaleriDesaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('file')
                    ->disk('public')
                    ->columnSpanFull()
                    ->required()
                    ->rules(['mimes:jpeg,jpg,mp4,png', 'max:1024']),
                TextInput::make('judul')
                    ->required(),
                TextInput::make('deskripsi')
                    ->required(),
                Select::make('type')
                    ->options(TypeFileEnum::class)
                    ->default('IMAGE')
                    ->required(),
            ]);
    }
}
