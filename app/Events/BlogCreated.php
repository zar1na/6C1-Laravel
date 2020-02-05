<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class BlogCreated
{ 
    
    public $blog;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($blog)
    {
        $this->blog = $blog;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
}
