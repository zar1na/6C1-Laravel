<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Document extends Model
{
   public static function boot(){
        parent::boot();
        static::updating(function($document) {
            $document->adjust();
        });
    }
    
    public function adjustments() {
        return $this->belongsToMany(User::class, 'adjustments')
        ->withTimestamps() // by default Laravel won't automatically use timestamps in tinker
        ->withPivot(['before', 'after'])
        ->latest('pivot_updated_at'); // pivot.updated_at as pivot_updated_as
    }
    
    public function adjust($userId = null, $diff = null) {
        $userId = $userId ?: Auth::id();
        $diff = $diff ?: $this->getDiff();
        return $this->adjustments()->attach($userId, $diff);  
    }
    
    protected function getDiff(){
        $changed = $this->getDirty();
        $before = json_encode(array_intersect_key($this->fresh()->toArray(), $changed));
        // array_intersect typically works with values
        $after = json_encode($changed); // dirty will return different attributes  
        
        return compact('before', 'after');
    }
}
