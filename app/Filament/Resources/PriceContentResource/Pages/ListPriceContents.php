<?php

namespace App\Filament\Resources\PriceContentResource\Pages;

use App\Filament\Resources\PriceContentResource;
use Filament\Resources\Pages\ListRecords;

class ListPriceContents extends ListRecords
{
    protected static string $resource = PriceContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
