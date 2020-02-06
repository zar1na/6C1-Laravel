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

}
