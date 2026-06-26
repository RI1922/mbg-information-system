<?php

namespace App\Enums;

final class PermissionEnum
{
    public static function make(
        string $domain,
        string $resource,
        string $action,
    ): string {
        return "{$domain}.{$resource}.{$action}";
    }
}