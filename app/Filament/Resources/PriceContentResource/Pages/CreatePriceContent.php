<?php

namespace App\Filament\Resources\PriceContentResource\Pages;

use App\Filament\Resources\PriceContentResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePriceContent extends CreateRecord
{
    protected static string $resource = PriceContentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Ensure content is an array
        if (!isset($data['content'])) {
            $data['content'] = [];
        }
        
        return $data;
    }
}
