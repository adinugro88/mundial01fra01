<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageContentResource\Pages;
use App\Models\PageContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageContentResource extends Resource
{
    protected static ?string $model = PageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Konten Halaman';

    protected static ?string $modelLabel = 'Konten Halaman';

    protected static ?string $pluralModelLabel = 'Konten Halaman';

    protected static ?string $navigationGroup = 'Konten Situs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Identitas Blok')
                            ->schema([
                                Forms\Components\TextInput::make('page_key')
                                    ->label('Kunci Halaman')
                                    ->required()
                                    ->disabled(fn (?PageContent $record) => $record?->exists)
                                    ->helperText('mulai, tugas_1, tugas_1_batal, tugas_2, tugas_2_batal, tugas_selesai, kembali, tidak_tersedia, reservasi')
                                    ->columnSpanFull(),

                                Forms\Components\Select::make('block_type')
                                    ->label('Jenis Blok')
                                    ->required()
                                    ->options([
                                        'tab' => 'Tab penawaran',
                                        'instruction' => 'Instruksi tugas',
                                        'task' => 'Pernyataan tugas',
                                        'confirm' => 'Konfirmasi lewati',
                                        'notice' => 'Pemberitahuan',
                                        'form' => 'Formulir reservasi',
                                        'content' => 'Konten biasa',
                                    ])
                                    ->default('content'),

                                Forms\Components\TextInput::make('title')
                                    ->label('Judul')
                                    ->required()
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('subtitle')
                                    ->label('Subjudul')
                                    ->columnSpanFull(),
                            ])->columns(2),

                        Forms\Components\Section::make('Isi Konten')
                            ->schema([
                                Forms\Components\Textarea::make('description')
                                    ->label('Deskripsi (boleh HTML)')
                                    ->rows(10)
                                    ->columnSpanFull(),
                            ]),

                        Forms\Components\Section::make('Tombol')
                            ->schema([
                                Forms\Components\TextInput::make('button_text')
                                    ->label('Tombol Utama'),
                                Forms\Components\TextInput::make('button_url')
                                    ->label('URL Tombol Utama')
                                    ->placeholder('/tache, /reservasi, /'),
                                Forms\Components\TextInput::make('secondary_button_text')
                                    ->label('Tombol Kedua'),
                                Forms\Components\TextInput::make('secondary_button_url')
                                    ->label('URL Tombol Kedua')
                                    ->placeholder('kosongkan = kembali ke halaman sebelumnya'),
                            ])->columns(2),

                        Forms\Components\Section::make('Pengaturan Tampilan')
                            ->schema([
                                Forms\Components\TextInput::make('sort_order')
                                    ->label('Urutan')
                                    ->numeric()
                                    ->default(0)
                                    ->required(),
                                Forms\Components\Toggle::make('is_visible')
                                    ->label('Tampil di situs')
                                    ->default(true),
                            ])->columns(2),
                    ])->columnSpan(['lg' => 2]),

                Forms\Components\Section::make('Pratinjau')
                    ->schema([
                        Forms\Components\Placeholder::make('preview')
                            ->label('Ringkasan')
                            ->content(fn (?PageContent $record): string => $record
                                ? 'Halaman: '.$record->page_key.' | Jenis: '.$record->block_type.' | Urutan: '.$record->sort_order
                                : 'Blok baru'),
                    ])->columnSpan(['lg' => 1]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_key')
                    ->label('Halaman')
                    ->badge()
                    ->color('info')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('block_type')
                    ->label('Jenis')
                    ->badge()
                    ->color('gray')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('button_text')
                    ->label('Tombol')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_visible')
                    ->label('Tampil'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort(fn ($query) => $query->orderBy('page_key')->orderBy('sort_order'))
            ->filters([
                Tables\Filters\SelectFilter::make('page_key')
                    ->label('Halaman')
                    ->options(fn () => PageContent::query()
                        ->distinct()
                        ->orderBy('page_key')
                        ->pluck('page_key', 'page_key')
                        ->all()),
                Tables\Filters\SelectFilter::make('block_type')
                    ->label('Jenis Blok')
                    ->options([
                        'tab' => 'Tab penawaran',
                        'instruction' => 'Instruksi tugas',
                        'task' => 'Pernyataan tugas',
                        'confirm' => 'Konfirmasi lewati',
                        'notice' => 'Pemberitahuan',
                        'form' => 'Formulir reservasi',
                        'content' => 'Konten biasa',
                    ]),
                Tables\Filters\TernaryFilter::make('is_visible')
                    ->label('Tampil di situs'),
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
            'index' => Pages\ListPageContents::route('/'),
            'create' => Pages\CreatePageContent::route('/create'),
            'edit' => Pages\EditPageContent::route('/{record}/edit'),
        ];
    }
}
