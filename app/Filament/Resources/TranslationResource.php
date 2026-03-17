<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranslationResource\Pages;
use App\Filament\Resources\TranslationResource\RelationManagers;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rules\Unique;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    protected static ?string $navigationIcon = 'heroicon-o-language';

    protected static ?string $navigationLabel = 'Translations';

    protected static ?string $modelLabel = 'Translation';

    public static function form(Form $form): Form
    {
        $isEditingMode = (bool) $form->getRecord();
        
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->required()
                    ->placeholder('e.g., home.welcome')
                    ->disabled($isEditingMode)
                    ->dehydrated(!$isEditingMode),
                    
                Forms\Components\Select::make('language')
                    ->options([
                        'id' => 'Bahasa Indonesia',
                        'en' => 'English',
                        'fr' => 'Français',
                        'de' => 'Deutsch',
                        'es' => 'Español',
                        'it' => 'Italiano',
                    ])
                    ->required()
                    ->disabled($isEditingMode)
                    ->dehydrated(!$isEditingMode)
                    ->default('id'),
                    
                Forms\Components\TextInput::make('section')
                    ->placeholder('e.g., home, offers, contact'),
                    
                Forms\Components\Select::make('type')
                    ->options([
                        'text' => 'Text',
                        'textarea' => 'Textarea',
                        'html' => 'HTML',
                    ])
                    ->default('text'),
                    
                Forms\Components\Textarea::make('value')
                    ->required()
                    ->rows(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('language')
                    ->badge()
                    ->color(fn (string $state): string => match($state) {
                        'id' => 'primary',
                        'en' => 'info',
                        'fr' => 'success',
                        'de' => 'warning',
                        'es' => 'danger',
                        'it' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('section')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('type')
                    ->badge(),
                    
                Tables\Columns\TextColumn::make('value')
                    ->limit(50)
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('language')
                    ->options([
                        'id' => 'Bahasa Indonesia',
                        'en' => 'English',
                        'fr' => 'Français',
                        'de' => 'Deutsch',
                        'es' => 'Español',
                        'it' => 'Italiano',
                    ]),
                    
                Tables\Filters\SelectFilter::make('section'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}
