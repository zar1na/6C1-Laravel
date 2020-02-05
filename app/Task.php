<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    
    public function blog() {
        
        return $this->belongsTo(Blog::class);
        
    }
    
    public function complete($completed = true)
    {
        $this->update(compact('completed'));
        
    }
    
    public function incomplete()
    {
        $this->complete('false');
        
    }
    
}
