<?php

namespace App\Policies;

use App\Phone;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhonePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any phones.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        // return true;

    }

    /**
     * Determine whether the user can view the phone.
     *
     * @param  \App\User  $user
     * @param  \App\Phone  $phone
     * @return mixed
     */
    public function view(User $user, Phone $phone)
    {
        //
        // return true;

    }

    /**
     * Determine whether the user can create phones.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the phone.
     *
     * @param  \App\User  $user
     * @param  \App\Phone  $phone
     * @return mixed
     */
    public function update(User $user, Phone $phone)
    {
        //  public function update(User $user, Post $post)
    
        return $user->id === $phone->user_id;
    
    }

    /**
     * Determine whether the user can delete the phone.
     *
     * @param  \App\User  $user
     * @param  \App\Phone  $phone
     * @return mixed
     */
    public function delete(User $user, Phone $phone)
    {
        //
        return $user->id === $phone->user_id;


    }

    /**
     * Determine whether the user can restore the phone.
     *
     * @param  \App\User  $user
     * @param  \App\Phone  $phone
     * @return mixed
     */
    public function restore(User $user, Phone $phone)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the phone.
     *
     * @param  \App\User  $user
     * @param  \App\Phone  $phone
     * @return mixed
     */
    public function forceDelete(User $user, Phone $phone)
    {
        //
    }
}
