<?php

namespace App\Filament\Resources\WarehouseStocks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WarehouseStocksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('warehouse_id')

            ->columns([

                TextColumn::make('warehouse.name')
                    ->label('Gudang')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('warehouse.sppg.name')
                    ->label('SPPG')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('item.code')
                    ->label('Kode')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('item.name')
                    ->label('Barang')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('item.category.name')
                    ->label('Kategori')
                    ->badge()
                    ->sortable(),

                TextColumn::make('item.unit.symbol')
                    ->label('Satuan')
                    ->badge(),

                TextColumn::make('quantity')
                    ->label('Jumlah')
                    ->numeric(decimalPlaces: 2)
                    ->sortable(),

                TextColumn::make('reserved_quantity')
                    ->label('Reserved')
                    ->numeric(decimalPlaces: 2)
                    ->sortable(),

                TextColumn::make('available_quantity')
                    ->label('Tersedia')
                    ->numeric(decimalPlaces: 2)
                    ->sortable(),

                TextColumn::make('average_cost')
                    ->label('Harga Rata-rata')
                    ->money('IDR')
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Update')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])

            ->filters([

            ])

            ->recordActions([

                ViewAction::make(),

                EditAction::make(),

                DeleteAction::make(),

            ])

            ->toolbarActions([

                BulkActionGroup::make([

                    DeleteBulkAction::make(),

                ]),

            ]);
    }
}