<?php

namespace App\Filament\Resources\BeritaDesas\Pages;

use App\Filament\Resources\BeritaDesas\BeritaDesaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBeritaDesa extends EditRecord
{
    protected static string $resource = BeritaDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
