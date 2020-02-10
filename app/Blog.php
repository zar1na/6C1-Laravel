<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // MVC - model view controller *represent building blocks
    // artisan tinker-> run basic php or reference classes
    // collections are glorified arrays
    
    //$fillable 'title', 'description' -> safer as it doesn't allow for any unwanted data to pass through
    //$guarded -> accept eveything apart from, major mass assignment protection issues
    protected $guarded = [];
    
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
