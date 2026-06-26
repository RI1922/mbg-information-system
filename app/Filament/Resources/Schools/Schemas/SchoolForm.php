<?php

namespace App\Filament\Resources\Schools\Schemas;

use App\Filament\Components\VillageSearch;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SchoolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Sekolah')
                    ->schema([

                        Select::make('sppg_id')
                            ->label('SPPG')
                            ->relationship('sppg', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        VillageSearch::make('village_id'),

                        TextInput::make('npsn')
                            ->label('NPSN')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(20),

                        TextInput::make('name')
                            ->label('Nama Sekolah')
                            ->required()
                            ->maxLength(255),

                        Select::make('level')
                            ->label('Jenjang')
                            ->options([
                                'TK' => 'TK',
                                'SD' => 'SD',
                                'SMP' => 'SMP',
                                'SMA' => 'SMA',
                                'SMK' => 'SMK',
                                'SLB' => 'SLB',
                            ])
                            ->required(),

                        TextInput::make('principal')
                            ->label('Kepala Sekolah')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('phone')
                            ->label('Telepon')
                            ->tel()
                            ->maxLength(20),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),

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