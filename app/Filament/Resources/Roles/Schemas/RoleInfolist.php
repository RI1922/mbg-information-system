<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RoleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextEntry::make('name')
                    ->label('Role Name'),

                TextEntry::make('guard_name')
                    ->label('Guard'),

                TextEntry::make('permissions.name')
                    ->label('Permissions')
                    ->badge(),

                TextEntry::make('created_at')
                    ->label('Created At')
                    ->dateTime('d F Y H:i'),

                TextEntry::make('updated_at')
                    ->label('Updated At')
                    ->dateTime('d F Y H:i'),

            ]);
    }
}