<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Kategori Barang')
                    ->schema([

                        TextEntry::make('code'),

                        TextEntry::make('name'),

                        TextEntry::make('description')
                            ->columnSpanFull(),

                        TextEntry::make('is_active')
                            ->badge()
                            ->formatStateUsing(
                                fn(bool $state) => $state ? 'Aktif' : 'Nonaktif'
                            ),

                        TextEntry::make('created_at')
                            ->dateTime('d M Y H:i'),

                        TextEntry::make('updated_at')
                            ->dateTime('d M Y H:i'),

                    ])
                    ->columns(2),

            ]);
    }
}