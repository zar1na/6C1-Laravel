<?php

namespace App\Listeners;

use App\Events\BlogCreated;

use Illuminate\Support\Facades\Mail;
use App\Mail\BlogCreated as BlogCreatedMail;


class SendBlogCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProjectCreated  $event
     * @return void
     */
    public function handle(BlogCreated $event)
    {
        Mail::to($event->blog->owner->email)->send(
        new BlogCreatedMail($event->blog)
        );
    }
}
