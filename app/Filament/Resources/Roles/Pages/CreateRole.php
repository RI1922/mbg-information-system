<?php

namespace App\Filament\Resources\Roles\Pages;

use App\Filament\Resources\Roles\RoleResource;
use App\Modules\IAM\Permission\Actions\SyncRolePermissions;
use Filament\Resources\Pages\CreateRecord;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;

    protected function afterCreate(): void
    {
        app(SyncRolePermissions::class)
            ->execute(
                $this->record,
                $this->data['permissions'] ?? [],
            );
    }
}