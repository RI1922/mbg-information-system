<?php

namespace App\Filament\Resources\Regencies\Schemas;

use App\Models\Province;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RegencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Regency Information')
                    ->schema([

                        Select::make('province_id')
                            ->label('Province')
                            ->relationship('province', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('code')
                            ->required()
                            ->maxLength(4)
                            ->unique(ignoreRecord: true),

                        TextInput::make('name')
                            ->required()
                            ->maxLength(100),

                    ])
                    ->columns(2),

            ]);
    }
}