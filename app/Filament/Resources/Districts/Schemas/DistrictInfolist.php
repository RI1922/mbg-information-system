<?php

namespace App\Filament\Resources\Districts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DistrictInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextEntry::make('regency.province.name')
                    ->label('Province'),

                TextEntry::make('regency.name')
                    ->label('Regency'),

                TextEntry::make('code')
                    ->label('Code'),

                TextEntry::make('name')
                    ->label('District'),

                TextEntry::make('created_at')
                    ->dateTime('d F Y H:i'),

                TextEntry::make('updated_at')
                    ->dateTime('d F Y H:i'),

            ]);
    }
}