<?php

namespace App\Filament\Resources\Villages\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VillageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Village Information')
                    ->schema([

                        Select::make('district_id')
                            ->relationship('district', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('code')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(10),

                        TextInput::make('name')
                            ->required()
                            ->maxLength(120),

                    ])
                    ->columns(2),

            ]);
    }
}