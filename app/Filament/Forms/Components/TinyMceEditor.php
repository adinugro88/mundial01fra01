<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\Field;

class TinyMceEditor extends Field
{
    protected string $view = 'filament.forms.components.tinymce-editor';

    public function getDefaultName(): ?string
    {
        return 'tinymce_editor';
    }
}
