<?php

namespace App\Filament\Resources\Schools\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SchoolsTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->defaultSort('name')

            ->columns([

                TextColumn::make('npsn')
                    ->label('NPSN')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama Sekolah')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('level')
                    ->label('Jenjang')
                    ->badge()
                    ->sortable(),

                TextColumn::make('sppg.name')
                    ->label('SPPG')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('village.name')
                    ->label('Desa')
                    ->searchable(),

                TextColumn::make('principal')
                    ->label('Kepala Sekolah')
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