<?php

namespace App\Filament\Resources\WarehouseStocks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WarehouseStockInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Stok Gudang')
                    ->schema([

                        TextEntry::make('warehouse.name')
                            ->label('Gudang'),

                        TextEntry::make('warehouse.sppg.name')
                            ->label('SPPG'),

                        TextEntry::make('item.code')
                            ->label('Kode Barang'),

                        TextEntry::make('item.name')
                            ->label('Nama Barang'),

                        TextEntry::make('item.category.name')
                            ->label('Kategori'),

                        TextEntry::make('item.unit.name')
                            ->label('Satuan'),

                        TextEntry::make('quantity')
                            ->label('Jumlah Stok')
                            ->numeric(decimalPlaces: 2),

                        TextEntry::make('reserved_quantity')
                            ->label('Reserved')
                            ->numeric(decimalPlaces: 2),

                        TextEntry::make('available_quantity')
                            ->label('Tersedia')
                            ->numeric(decimalPlaces: 2),

                        TextEntry::make('average_cost')
                            ->label('Harga Rata-rata')
                            ->money('IDR'),

                        TextEntry::make('created_at')
                            ->label('Dibuat')
                            ->dateTime('d M Y H:i'),

                        TextEntry::make('updated_at')
                            ->label('Diubah')
                            ->dateTime('d M Y H:i'),

                    ])
                    ->columns(2),

            ]);
    }
}