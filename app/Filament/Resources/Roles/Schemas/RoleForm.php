<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Role Information')
                    ->schema([

                        TextInput::make('name')
                            ->label('Role Name')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        TextInput::make('guard_name')
                            ->label('Guard')
                            ->default('web')
                            ->disabled()
                            ->dehydrated(),

                    ])
                    ->columns(2),

                Section::make('Permissions')
                    ->description('Select the permissions assigned to this role.')
                    ->schema([

                        CheckboxList::make('permissions')
                            ->label('')
                            ->relationship(
                                name: 'permissions',
                                titleAttribute: 'name',
                            )
                            ->columns(2)
                            ->searchable()
                            ->bulkToggleable(),

                    ]),

            ]);
    }
}