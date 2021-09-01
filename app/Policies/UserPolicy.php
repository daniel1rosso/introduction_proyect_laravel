<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user, $ability){
        if ($user->rol_id == 1){
            return true;
        }
    }

    public function edit(User $authuser, User $user)
    {
        return $authuser->id == $user->id;
    }

    public function update(User $authuser, User $user)
    {
        return $authuser->id == $user->id;
    }

    public function destroy(User $authuser, User $user)
    {
        return $authuser->id == $user->id;
    }
}
