<?php

namespace App\Filament\Resources\Sppgs\Schemas;

use App\Filament\Components\VillageSearch;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SppgForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi SPPG')
                    ->schema([

                        TextInput::make('code')
                            ->label('Kode SPPG')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(20),

                        TextInput::make('name')
                            ->label('Nama SPPG')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('head_name')
                            ->label('Nama Kepala SPPG')
                            ->required()
                            ->maxLength(255),

                        VillageSearch::make('village_id'),

                        TextInput::make('phone')
                            ->label('Telepon')
                            ->tel()
                            ->maxLength(20),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),

                        TextInput::make('postal_code')
                            ->label('Kode Pos')
                            ->maxLength(10),

                        TextInput::make('latitude')
                            ->label('Latitude')
                            ->numeric(),

                        TextInput::make('longitude')
                            ->label('Longitude')
                            ->numeric(),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),

                        Textarea::make('address')
                            ->label('Alamat')
                            ->rows(4)
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

            ]);
    }
}