<?php

namespace App\Modules\IAM\User\Services;

use App\Models\User;
use App\Modules\IAM\User\Services\Contracts\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function create(array $data): User
    {
        return User::create($data);
    }

    public function update(User $user, array $data): User
    {
        $user->update($data);

        return $user->refresh();
    }

    public function delete(User $user): bool
    {
        return (bool) $user->delete();
    }
}