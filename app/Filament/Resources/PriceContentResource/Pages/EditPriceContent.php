<?php

namespace App\Filament\Resources\PriceContentResource\Pages;

use App\Filament\Resources\PriceContentResource;
use Filament\Resources\Pages\EditRecord;

class EditPriceContent extends EditRecord
{
    protected static string $resource = PriceContentResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Ensure content is an array
        if (!isset($data['content'])) {
            $data['content'] = [];
        }
        
        return $data;
    }
}
