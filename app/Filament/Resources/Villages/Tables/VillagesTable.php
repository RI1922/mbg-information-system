<?php

namespace App\Filament\Resources\Villages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VillagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('district.regency.province.name')
                    ->label('Province')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('district.regency.name')
                    ->label('Regency')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('district.name')
                    ->label('District')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('code')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime('d M Y'),

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