<?php

namespace App\Filament\Resources\Schools\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SchoolInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi Sekolah')
                    ->schema([

                        TextEntry::make('npsn')
                            ->label('NPSN'),

                        TextEntry::make('name')
                            ->label('Nama Sekolah'),

                        TextEntry::make('level')
                            ->label('Jenjang')
                            ->badge(),

                        TextEntry::make('principal')
                            ->label('Kepala Sekolah'),

                        TextEntry::make('sppg.name')
                            ->label('SPPG'),

                        TextEntry::make('village.district.regency.province.name')
                            ->label('Provinsi'),

                        TextEntry::make('village.district.regency.name')
                            ->label('Kabupaten / Kota'),

                        TextEntry::make('village.district.name')
                            ->label('Kecamatan'),

                        TextEntry::make('village.name')
                            ->label('Desa / Kelurahan'),

                        TextEntry::make('phone')
                            ->label('Telepon'),

                        TextEntry::make('email')
                            ->label('Email'),

                        TextEntry::make('address')
                            ->label('Alamat')
                            ->columnSpanFull(),

                        TextEntry::make('latitude')
                            ->label('Latitude'),

                        TextEntry::make('longitude')
                            ->label('Longitude'),

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