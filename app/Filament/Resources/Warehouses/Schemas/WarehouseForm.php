<?php

namespace App\Filament\Resources\Warehouses\Schemas;

use App\Filament\Components\VillageSearch;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WarehouseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Gudang')
                    ->schema([

                        TextInput::make('code')
                            ->label('Kode Gudang')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(20),

                        TextInput::make('name')
                            ->label('Nama Gudang')
                            ->required()
                            ->maxLength(255),

                        Select::make('type')
                            ->label('Jenis Gudang')
                            ->options([
                                'Gudang Utama'    => 'Gudang Utama',
                                'Gudang Cabang'   => 'Gudang Cabang',
                                'Gudang Produksi' => 'Gudang Produksi',
                                'Cold Storage'    => 'Cold Storage',
                            ])
                            ->required(),

                        Select::make('sppg_id')
                            ->label('SPPG')
                            ->relationship('sppg', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        VillageSearch::make('village_id'),

                        TextInput::make('capacity')
                            ->label('Kapasitas')
                            ->numeric()
                            ->required(),

                        TextInput::make('manager')
                            ->label('Penanggung Jawab')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('phone')
                            ->label('Telepon')
                            ->tel()
                            ->maxLength(20),

                        Textarea::make('address')
                            ->label('Alamat')
                            ->rows(4)
                            ->columnSpanFull(),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),

                    ])
                    ->columns(2),

            ]);
    }
}