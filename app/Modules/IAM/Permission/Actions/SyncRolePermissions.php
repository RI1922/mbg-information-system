<?php

namespace App\Modules\IAM\Permission\Actions;

use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final class SyncRolePermissions
{
    public function execute(
        Role $role,
        array|Collection $permissions,
    ): void {

        $permissions = Permission::query()
            ->whereIn('id', collect($permissions))
            ->get();

        $role->syncPermissions($permissions);
    }
}