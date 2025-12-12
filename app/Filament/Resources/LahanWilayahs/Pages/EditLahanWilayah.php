<?php

namespace App\Filament\Resources\LahanWilayahs\Pages;

use App\Filament\Resources\LahanWilayahs\LahanWilayahResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLahanWilayah extends EditRecord
{
    protected static string $resource = LahanWilayahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
