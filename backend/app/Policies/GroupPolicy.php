<?php

namespace App\Policies;

use App\User;
use App\Group;
use Illuminate\Auth\Access\HandlesAuthorization;

class GroupPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any odel-- groups.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(?User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the odel-- group.
     *
     * @param  \App\User  $user
     * @param  \App\Group  $Group
     * @return mixed
     */
    public function view(?User $user, Group $Group)
    {
        //
        return true;

    }

    /**
     * Determine whether the user can create odel-- groups.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return true;

    }

    /**
     * Determine whether the user can update the odel-- group.
     *
     * @param  \App\User  $user
     * @param  \App\Group  $group
     * @return mixed
     */
    public function update(User $user, Group $group)
    {
        //
        return $user->id === $group->user_id;
    }

    /**
     * Determine whether the user can delete the odel-- group.
     *
     * @param  \App\User  $user
     * @param  \App\Group  $Group
     * @return mixed
     */
    public function delete(User $user, Group $group)
    {
        //
        return $user->id === $group->user_id;

    }

    /**
     * Determine whether the user can restore the odel-- group.
     *
     * @param  \App\User  $user
     * @param  \App\Group  $Group
     * @return mixed
     */
    public function restore(User $user, Group $Group)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the odel-- group.
     *
     * @param  \App\User  $user
     * @param  \App\Group  $Group
     * @return mixed
     */
    public function forceDelete(User $user, Group $Group)
    {
        //
    }
}
