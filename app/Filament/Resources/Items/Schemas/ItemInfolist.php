<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ItemInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Barang')
                    ->schema([

                        TextEntry::make('category.name')
                            ->label('Kategori'),

                        TextEntry::make('unit.name')
                            ->label('Satuan'),

                        TextEntry::make('code')
                            ->label('Kode Barang'),

                        TextEntry::make('barcode')
                            ->label('Barcode'),

                        TextEntry::make('name')
                            ->label('Nama Barang'),

                        TextEntry::make('description')
                            ->label('Deskripsi')
                            ->columnSpanFull(),

                        TextEntry::make('minimum_stock')
                            ->label('Minimum Stok'),

                        TextEntry::make('maximum_stock')
                            ->label('Maximum Stok'),

                        TextEntry::make('purchase_price')
                            ->label('Harga Beli')
                            ->money('IDR'),

                        TextEntry::make('average_price')
                            ->label('Harga Rata-rata')
                            ->money('IDR'),

                        TextEntry::make('selling_price')
                            ->label('Harga Jual')
                            ->money('IDR'),

                        TextEntry::make('is_active')
                            ->label('Status')
                            ->badge()
                            ->formatStateUsing(
                                fn (bool $state) => $state ? 'Aktif' : 'Nonaktif'
                            ),

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