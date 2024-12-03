<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can access the admin panel.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function accessAdminPanel(User $user)
    {
        // Define your logic to determine if the user can access the admin panel
        // For example, you can check if the user has an 'admin' role
        return $user->role === 'admin';
    }
}