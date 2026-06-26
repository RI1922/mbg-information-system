<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextEntry::make('name')
                    ->label('Full Name'),

                TextEntry::make('username')
                    ->label('Username'),

                TextEntry::make('email')
                    ->label('Email Address'),

                TextEntry::make('roles.name')
                    ->label('Role')
                    ->badge(),

                TextEntry::make('created_at')
                    ->label('Created At')
                    ->dateTime('d F Y H:i'),

                TextEntry::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d F Y H:i'),

            ]);
    }
}