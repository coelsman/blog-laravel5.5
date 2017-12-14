<?php

namespace App\Policies;

use App\Models\Users;
use App\Models\Posts;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the posts.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Posts  $posts
     * @return mixed
     */
    public function view(Users $user, Posts $posts)
    {
        return true;
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create()
    {
        return true;
    }

    /**
     * Determine whether the user can update the posts.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Posts  $posts
     * @return mixed
     */
    public function update(Users $user, Posts $posts)
    {
        return true; //$user->id === $posts->user_id;
    }

    /**
     * Determine whether the user can delete the posts.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Posts  $posts
     * @return mixed
     */
    public function delete(Users $user, Posts $posts)
    {
        return $user->id === $posts->user_id;
    }
}
