<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Models\Reservation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationLabel = 'Reservasi';

    protected static ?string $modelLabel = 'Reservasi';

    protected static ?string $pluralModelLabel = 'Reservasi';

    protected static ?string $navigationGroup = 'Konten Situs';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Data Pemesan')
                            ->schema([
                                Forms\Components\TextInput::make('first_name')
                                    ->label('Nama depan')
                                    ->required()
                                    ->disabled(),
                                Forms\Components\TextInput::make('last_name')
                                    ->label('Nama belakang')
                                    ->required()
                                    ->disabled(),
                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required()
                                    ->disabled(),
                                Forms\Components\TextInput::make('phone')
                                    ->label('Telepon')
                                    ->required()
                                    ->disabled()
                                    ->formatStateUsing(fn ($state, $record) => $record
                                        ? $record->phone_code.' '.$record->phone
                                        : $state),
                            ])->columns(2),

                        Forms\Components\Section::make('Detail Reservasi')
                            ->schema([
                                Forms\Components\TextInput::make('people_count')
                                    ->label('Jumlah orang')
                                    ->numeric()
                                    ->required()
                                    ->disabled(),
                                Forms\Components\TextInput::make('reservation_date')
                                    ->label('Tanggal')
                                    ->type('date')
                                    ->required()
                                    ->disabled(),
                                Forms\Components\TextInput::make('reservation_time')
                                    ->label('Waktu')
                                    ->required()
                                    ->disabled(),
                                Forms\Components\Select::make('status')
                                    ->label('Status')
                                    ->required()
                                    ->options([
                                        'baru' => 'Baru',
                                        'diproses' => 'Diproses',
                                        'selesai' => 'Selesai',
                                        'dibatalkan' => 'Dibatalkan',
                                    ]),
                                Forms\Components\Textarea::make('comment')
                                    ->label('Keterangan')
                                    ->rows(4)
                                    ->columnSpanFull(),
                            ])->columns(3),
                    ])->columnSpan(['lg' => 2]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Nama')
                    ->searchable(['first_name', 'last_name'])
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Telepon')
                    ->formatStateUsing(fn ($state, $record) => $record->phone_code.' '.$state),
                Tables\Columns\TextColumn::make('people_count')
                    ->label('Orang')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reservation_date')
                    ->label('Tanggal')
                    ->date('d/m/Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reservation_time')
                    ->label('Waktu'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'baru' => 'info',
                        'diproses' => 'warning',
                        'selesai' => 'success',
                        'dibatalkan' => 'danger',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'baru' => 'Baru',
                        'diproses' => 'Diproses',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan',
                    ]),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReservations::route('/'),
            'view' => Pages\ViewReservation::route('/{record}'),
            'edit' => Pages\EditReservation::route('/{record}/edit'),
        ];
    }
}
