<?php

namespace App\Filament\Resources\Provinces\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProvinceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Province Information')
                    ->schema([

                        TextInput::make('code')
                            ->label('Province Code')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(2)
                            ->placeholder('32'),

                        TextInput::make('name')
                            ->label('Province Name')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('Jawa Barat'),

                    ])
                    ->columns(2),

            ]);
    }
}