<?php

namespace App\Filament\Resources\Sppgs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SppgsTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->defaultSort('name')

            ->columns([

                TextColumn::make('code')
                    ->label('Kode')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama SPPG')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('head_name')
                    ->label('Kepala')
                    ->searchable(),

                TextColumn::make('village.name')
                    ->label('Desa')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Telepon'),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

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