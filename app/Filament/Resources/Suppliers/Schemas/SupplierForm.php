<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use App\Filament\Components\VillageSearch;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Supplier')
                    ->schema([

                        TextInput::make('code')
                            ->label('Kode Supplier')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(20),

                        TextInput::make('name')
                            ->label('Nama Supplier')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('owner_name')
                            ->label('Nama Pemilik')
                            ->required()
                            ->maxLength(255),

                        VillageSearch::make('village_id'),

                        TextInput::make('phone')
                            ->label('Telepon')
                            ->tel()
                            ->required()
                            ->maxLength(20),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),

                        Textarea::make('address')
                            ->label('Alamat')
                            ->rows(4)
                            ->columnSpanFull(),

                        TextInput::make('npwp')
                            ->label('NPWP')
                            ->maxLength(50),

                        TextInput::make('bank_name')
                            ->label('Nama Bank')
                            ->maxLength(100),

                        TextInput::make('bank_account')
                            ->label('Nomor Rekening')
                            ->maxLength(100),

                        TextInput::make('bank_holder')
                            ->label('Atas Nama Rekening')
                            ->maxLength(255),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),

                        Textarea::make('notes')
                            ->label('Catatan')
                            ->rows(3)
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

            ]);
    }
}