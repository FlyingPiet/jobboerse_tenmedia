<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    // public function __construct()
    // {
    
    
    public function view(User $user, User $targetUser)
    {
        return $user->id === $targetUser->id || $user->role === 'admin';
    }

    public function update(User $user, User $targetUser)
    {
        return $user->id === $targetUser->id || $user->role === 'admin';
    }

    public function delete(User $user, User $targetUser)
    {
        return $user->id === $targetUser->id || $user->role === 'admin';
    }
    
}
