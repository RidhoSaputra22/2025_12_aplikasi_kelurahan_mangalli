<?php

namespace App\Filament\Resources\BeritaDesas\Pages;

use App\Filament\Resources\BeritaDesas\BeritaDesaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBeritaDesas extends ListRecords
{
    protected static string $resource = BeritaDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
