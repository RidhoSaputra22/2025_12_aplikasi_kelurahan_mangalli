<?php

namespace App\Filament\Resources\SaranaPrasaranas\Pages;

use App\Filament\Resources\SaranaPrasaranas\SaranaPrasaranaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSaranaPrasaranas extends ListRecords
{
    protected static string $resource = SaranaPrasaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
