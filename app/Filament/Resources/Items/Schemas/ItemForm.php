<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Barang')
                    ->schema([

                        Select::make('category_id')
                            ->label('Kategori')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('unit_id')
                            ->label('Satuan')
                            ->relationship('unit', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('code')
                            ->label('Kode Barang')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(30),

                        TextInput::make('barcode')
                            ->label('Barcode')
                            ->maxLength(100),

                        TextInput::make('name')
                            ->label('Nama Barang')
                            ->required()
                            ->maxLength(255),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),

                    ])
                    ->columns(2),

                Section::make('Informasi Stok')
                    ->schema([

                        TextInput::make('minimum_stock')
                            ->label('Minimum Stok')
                            ->numeric()
                            ->default(0)
                            ->required(),

                        TextInput::make('maximum_stock')
                            ->label('Maximum Stok')
                            ->numeric()
                            ->default(0)
                            ->required(),

                    ])
                    ->columns(2),

                Section::make('Harga')
                    ->schema([

                        TextInput::make('purchase_price')
                            ->label('Harga Beli')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0),

                        TextInput::make('average_price')
                            ->label('Harga Rata-rata')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0),

                        TextInput::make('selling_price')
                            ->label('Harga Jual')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0),

                    ])
                    ->columns(3),

                Section::make('Deskripsi')
                    ->schema([

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(5)
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}