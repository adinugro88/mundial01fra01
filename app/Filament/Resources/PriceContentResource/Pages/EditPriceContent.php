<?php

namespace App\Filament\Resources\PriceContentResource\Pages;

use App\Filament\Resources\PriceContentResource;
use App\Models\PriceContent;
use Filament\Resources\Pages\EditRecord;

class EditPriceContent extends EditRecord
{
    protected static string $resource = PriceContentResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Convert existing HTML back to text format for editing
        $languages = ['fr', 'en', 'id'];
        
        if (isset($data['content']) && is_array($data['content'])) {
            foreach ($languages as $lang) {
                $fieldKey = "content_{$lang}";
                if (isset($data['content'][$lang]) && is_string($data['content'][$lang])) {
                    $data[$fieldKey] = PriceContent::htmlToText($data['content'][$lang]);
                }
            }
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        return $this->convertTextToHtml($data);
    }

    private function convertTextToHtml(array $data): array
    {
        $languages = ['fr', 'en', 'id'];
        
        if (!isset($data['content'])) {
            $data['content'] = [];
        }

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
