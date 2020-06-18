<?php

namespace App;

use App\Mail\BlogCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
//use App\Events\BlogCreated;

class Blog extends Model
{
    // MVC - model view controller *represent building blocks
    protected $guarded = [];
    
    // this is for events
    protected $dispatchesEvents = [
    'created' =>BlogCreated::class
    //event(new BlogCreated($blog));, fires off through eloquent
    
    ];
    
    public function owner() // for sending "emails"
    {
        return $this->belongsTo(User::class);
    }
    
   
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function addComment($description)
    {
        $this->comments()->create(compact('description'));
        // already knows the associated project it wil apply blog id based on current instance
       /* return Comment::create([
        'blog_id' => $this->id,
        'description' => $description
        ]);
        */
        
    }

}
