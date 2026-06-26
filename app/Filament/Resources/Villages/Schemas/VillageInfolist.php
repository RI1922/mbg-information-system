<?php

namespace App\Filament\Resources\Villages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VillageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextEntry::make('district.regency.province.name')
                    ->label('Province'),

                TextEntry::make('district.regency.name')
                    ->label('Regency'),

                TextEntry::make('district.name')
                    ->label('District'),

                TextEntry::make('code')
                    ->label('Code'),

                TextEntry::make('name')
                    ->label('Village'),

                TextEntry::make('created_at')
                    ->dateTime('d F Y H:i'),

                TextEntry::make('updated_at')
                    ->dateTime('d F Y H:i'),

            ]);
    }
}