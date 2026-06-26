<?php

namespace App\Filament\Resources\Provinces\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProvinceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextEntry::make('code')
                    ->label('Province Code'),

                TextEntry::make('name')
                    ->label('Province Name'),

                TextEntry::make('created_at')
                    ->label('Created At')
                    ->dateTime('d F Y H:i'),

                TextEntry::make('updated_at')
                    ->label('Updated At')
                    ->dateTime('d F Y H:i'),

            ]);
    }
}