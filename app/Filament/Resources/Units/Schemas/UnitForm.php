<?php

namespace App\Filament\Resources\Units\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UnitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Satuan Barang')
                    ->schema([

                        TextInput::make('code')
                            ->label('Kode')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(20),

                        TextInput::make('name')
                            ->label('Nama Satuan')
                            ->required(),

                        TextInput::make('symbol')
                            ->label('Simbol')
                            ->required(),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(4)
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

            ]);
    }
}