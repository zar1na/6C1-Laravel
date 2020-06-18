<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $guarded = [];
     
     public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
    
   /* public function like($liked = true) { // $comment->complete(false)
        $this->update(compact('liked'));
        
    }
    */
}
