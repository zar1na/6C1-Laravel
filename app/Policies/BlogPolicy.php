<?php

namespace App\Policies;

use App\User;
use App\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the project.
     *
     * @param  \App\User  $user
     * @param  \App\Blog  $blog
     * @return mixed
     */
    public function update(User $user, Blog $blog)
    {
        return $blog->owner_id == $user->id;
    }
     
}
