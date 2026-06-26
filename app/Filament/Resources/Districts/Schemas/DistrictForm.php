<?php

namespace App\Filament\Resources\Districts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DistrictForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('District Information')
                    ->schema([

                        Select::make('regency_id')
                            ->relationship('regency', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('code')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(7),

                        TextInput::make('name')
                            ->required()
                            ->maxLength(100),

                    ])
                    ->columns(2),

            ]);
    }
}