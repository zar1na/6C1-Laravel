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
    
    // 4 events
    protected $dispatchesEvents = [
    'created' =>BlogCreated::class
    //event(new BlogCreated($blog));
    
    ];
    
    public function owner() // for sending "emails"
    {
        return $this->belongsTo(User::class);
    }
    
    public static function boot()
    {
        parent::boot(); // overwriting a method on the model class
        
        static::created(function ($blog) {
            // excecuted after new blog created
        Mail::to($blog->owner->email)->send(new BlogCreated($blog)
        );
            
        });
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function addComment($description)
    {
        $this->comments()->create(compact('description'));
        // alrady knows associated project it wil apply blog id based on current instance
        /* return Comment::create([
        'blog_id' => $this->id,
        'description' => $description
        ]);
        */
        
    }

}
