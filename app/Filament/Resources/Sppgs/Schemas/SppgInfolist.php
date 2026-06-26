<?php

namespace App\Filament\Resources\Sppgs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SppgInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Informasi SPPG')
                    ->schema([

                        TextEntry::make('code')
                            ->label('Kode'),

                        TextEntry::make('name')
                            ->label('Nama SPPG'),

                        TextEntry::make('head_name')
                            ->label('Kepala SPPG'),

                        TextEntry::make('village.name')
                            ->label('Desa'),

                        TextEntry::make('phone')
                            ->label('Telepon'),

                        TextEntry::make('email')
                            ->label('Email'),

                        TextEntry::make('postal_code')
                            ->label('Kode Pos'),

                        TextEntry::make('address')
                            ->label('Alamat')
                            ->columnSpanFull(),

                        TextEntry::make('latitude'),

                        TextEntry::make('longitude'),

                        TextEntry::make('is_active')
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