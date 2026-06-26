<?php

namespace App\Filament\Resources\Regencies\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RegencyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextEntry::make('province.name')
                    ->label('Province'),

                TextEntry::make('code')
                    ->label('Code'),

                TextEntry::make('name')
                    ->label('Regency'),

                TextEntry::make('created_at')
                    ->dateTime(),

                TextEntry::make('updated_at')
                    ->dateTime(),

            ]);
    }
}