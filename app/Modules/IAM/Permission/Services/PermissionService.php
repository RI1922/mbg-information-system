<?php

namespace App\Modules\IAM\Permission\Services;

use App\Modules\IAM\Permission\DTO\PermissionGroup;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;

class PermissionService
{
    /**
     * @return Collection<int, PermissionGroup>
     */
    public static function grouped(): Collection
    {
        return Permission::query()
            ->orderBy('name')
            ->get()
            ->groupBy(function (Permission $permission) {
                $parts = explode('.', $permission->name);

                return strtoupper($parts[0]);
            })
            ->flatMap(function ($permissions, $domain) {

                return $permissions
                    ->groupBy(function (Permission $permission) {

                        $parts = explode('.', $permission->name);

                        return ucfirst($parts[1]);
                    })
                    ->map(function ($permissions, $resource) use ($domain) {

                        return new PermissionGroup(
                            domain: $domain,
                            resource: $resource,
                            permissions: $permissions->mapWithKeys(function (Permission $permission) {

                                $parts = explode('.', $permission->name);

                                return [
                                    $permission->id => ucfirst($parts[2]),
                                ];
                            })->toArray(),
                        );
                    });
            })
            ->values();
    }
}