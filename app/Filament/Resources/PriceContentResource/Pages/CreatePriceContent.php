<?php

namespace App\Filament\Resources\PriceContentResource\Pages;

use App\Filament\Resources\PriceContentResource;
use App\Models\PriceContent;
use Filament\Resources\Pages\CreateRecord;

class CreatePriceContent extends CreateRecord
{
    protected static string $resource = PriceContentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return $this->convertTextToHtml($data);
    }

    private function convertTextToHtml(array $data): array
    {
        $languages = ['fr', 'en', 'id'];
        $data['content'] = [];

        foreach ($languages as $lang) {
            $fieldKey = "content_{$lang}";
            if (isset($data[$fieldKey])) {
                $data['content'][$lang] = PriceContent::parseTextToHtml($data[$fieldKey]);
            }
            unset($data[$fieldKey], $data["preview_{$lang}"]);
        }

        return $data;
    }
}
