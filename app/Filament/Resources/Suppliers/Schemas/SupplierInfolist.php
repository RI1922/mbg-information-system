<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SupplierInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Supplier')
                    ->schema([

                        TextEntry::make('code')
                            ->label('Kode Supplier'),

                        TextEntry::make('name')
                            ->label('Nama Supplier'),

                        TextEntry::make('owner_name')
                            ->label('Nama Pemilik'),

                        TextEntry::make('phone')
                            ->label('Telepon'),

                        TextEntry::make('email')
                            ->label('Email'),

                        TextEntry::make('village.district.regency.province.name')
                            ->label('Provinsi'),

                        TextEntry::make('village.district.regency.name')
                            ->label('Kabupaten / Kota'),

                        TextEntry::make('village.district.name')
                            ->label('Kecamatan'),

                        TextEntry::make('village.name')
                            ->label('Desa / Kelurahan'),

                        TextEntry::make('postal_code')
                            ->label('Kode Pos'),

                        TextEntry::make('address')
                            ->label('Alamat')
                            ->columnSpanFull(),

                        TextEntry::make('npwp')
                            ->label('NPWP'),

                        TextEntry::make('bank_name')
                            ->label('Nama Bank'),

                        TextEntry::make('bank_account')
                            ->label('Nomor Rekening'),

                        TextEntry::make('bank_holder')
                            ->label('Atas Nama Rekening'),

                        TextEntry::make('notes')
                            ->label('Catatan')
                            ->columnSpanFull(),

                        TextEntry::make('is_active')
                            ->label('Status')
                            ->badge()
                            ->formatStateUsing(fn (bool $state) => $state ? 'Aktif' : 'Nonaktif'),

                        TextEntry::make('created_at')
                            ->label('Dibuat')
                            ->dateTime('d M Y H:i'),

                        TextEntry::make('updated_at')
                            ->label('Diubah')
                            ->dateTime('d M Y H:i'),

                    ])
                    ->columns(2),

            ]);
    }
}