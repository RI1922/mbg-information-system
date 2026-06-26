<?php

namespace App\Filament\Resources\WarehouseStocks\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WarehouseStockForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Stok')
                    ->schema([

                        Select::make('warehouse_id')
                            ->label('Gudang')
                            ->relationship('warehouse', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('item_id')
                            ->label('Barang')
                            ->relationship('item', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                    ])
                    ->columns(2),

                Section::make('Jumlah Stok')
                    ->schema([

                        TextInput::make('quantity')
                            ->label('Jumlah')
                            ->numeric()
                            ->required()
                            ->default(0),

                        TextInput::make('reserved_quantity')
                            ->label('Reserved')
                            ->numeric()
                            ->required()
                            ->default(0),

                        TextInput::make('available_quantity')
                            ->label('Tersedia')
                            ->numeric()
                            ->required()
                            ->default(0),

                        TextInput::make('average_cost')
                            ->label('Harga Rata-rata')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(0),

                    ])
                    ->columns(2),

            ]);
    }
}