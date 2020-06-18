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
    public function edit(User $user, Blog $blog)
    {
        return $blog->owner_id == $user->id; // ploicy for whether a user can edit another users blog
    }
     
}
