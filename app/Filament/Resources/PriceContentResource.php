<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PriceContentResource\Pages;
use App\Models\PriceContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class PriceContentResource extends Resource
{
    protected static ?string $model = PriceContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationLabel = 'Price Content';

    protected static ?string $modelLabel = 'Price Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('section_key')
                    ->required()
                    ->disabled(fn (?PriceContent $record) => $record?->exists)
                    ->placeholder('e.g., pool_admission, sauna_admission')
                    ->columnSpanFull(),

                Tabs::make('Languages')
                    ->tabs([
                        Tabs\Tab::make('Français')
                            ->schema(self::createLanguageTab('fr')),
                        Tabs\Tab::make('English')
                            ->schema(self::createLanguageTab('en')),
                        Tabs\Tab::make('Bahasa Indonesia')
                            ->schema(self::createLanguageTab('id')),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    private static function createLanguageTab(string $lang): array
    {
        return [
            Forms\Components\Textarea::make("content_{$lang}")
                ->label('Table Data')
                ->placeholder("Format:\nService | Price 1 | Price 2 | Price 3\nRow 1 | value | value | value\nRow 2 | value | value | value")
                ->rows(15)
                ->hint('Separate columns with pipe (|). Each line is a row. First line is headers.')
                ->required()
                ->columnSpanFull(),

            Forms\Components\ViewField::make("preview_{$lang}")
                ->label('Preview')
                ->view('filament.components.price-table-preview', [
                    'language' => $lang,
                ])
                ->columnSpanFull(),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('section_key')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListPriceContents::route('/'),
            'create' => Pages\CreatePriceContent::route('/create'),
            'edit' => Pages\EditPriceContent::route('/{record}/edit'),
        ];
    }
}
