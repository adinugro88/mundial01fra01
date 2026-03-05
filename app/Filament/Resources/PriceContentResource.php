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

                Tabs::make('Content')
                    ->tabs([
                        Tabs\Tab::make('Français')
                            ->schema([
                                Forms\Components\RichEditor::make('content.fr')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\RichEditor::make('content.en')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('Bahasa Indonesia')
                            ->schema([
                                Forms\Components\RichEditor::make('content.id')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
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
