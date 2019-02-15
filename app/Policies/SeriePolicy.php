<?php

namespace App\Policies;

use App\User;
use App\Serie;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeriePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the serie.
     *
     * @param  \App\User  $user
     * @param  \App\Serie  $serie
     * @return mixed
     */
    public function view(User $user, Serie $serie)
    {
        //
    }

    /**
     * Determine whether the user can create series.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->id > 0;
    }

    /**
     * Determine whether the user can update the serie.
     *
     * @param  \App\User  $user
     * @param  \App\Serie  $serie
     * @return mixed
     */
    public function update(User $user, Serie $serie)
    {
        //
        return $serie->owner_id == $user->id;
    }

    /**
     * Determine whether the user can delete the serie.
     *
     * @param  \App\User  $user
     * @param  \App\Serie  $serie
     * @return mixed
     */
    public function delete(User $user, Serie $serie)
    {
        //
        return $serie->owner_id == $user->id;

    }

    /**
     * Determine whether the user can restore the serie.
     *
     * @param  \App\User  $user
     * @param  \App\Serie  $serie
     * @return mixed
     */
    public function restore(User $user, Serie $serie)
    {
        //
        return $serie->owner_id == $user->id;

    }

    /**
     * Determine whether the user can permanently delete the serie.
     *
     * @param  \App\User  $user
     * @param  \App\Serie  $serie
     * @return mixed
     */
    public function forceDelete(User $user, Serie $serie)
    {
        //
    }
}
