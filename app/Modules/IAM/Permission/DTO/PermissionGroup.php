<?php

namespace App\Modules\IAM\Permission\DTO;

final readonly class PermissionGroup
{
    public function __construct(
        public string $domain,
        public string $resource,
        public array $permissions,
    ) {
    }
}