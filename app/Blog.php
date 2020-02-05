<?php

namespace App;

//use App\Mail\BlogCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use App\Events\BlogCreated;

class Blog extends Model
{
    // MVC - model view controller *represent building blocks
    // artisan tinker-> run basic php or reference classes
    // collections are glorified arrays
    
    //$fillable 'title', 'description' -> safer as it doesn't allow for any unwanted data to pass through
    //$guarded -> accept eveything apart from, major mass assignment protection issues
    protected $guarded = [];
    
    protected $dispatchesEvents = [
    'created' =>BlogCreated::class
    //event(new BlogCreated($blog));
    ];
    
    public function owner() // for sending "emails"
    {
        return $this->belongsTo(User::class);
    }
    
    /*public static function boot()
    {
        parent::boot(); // overwriting a method on model class
        
        static::created(function ($blog) {
            // excecuted after new blog created
        Mail::to($blog->owner->email)->send(
        // queue
        new BlogCreated($blog)
        
        );
            
        });
    }
    */
    
    public function tasks()
    {
    return $this->hasMany(Task::class);
    // relationship (blog has many tasks)
    }
    
     public function addTask($task)
    {
        $this->tasks()->create($task);
    // already knows the associated blog, the blog id will be applied automatically
    
    }
    
}
