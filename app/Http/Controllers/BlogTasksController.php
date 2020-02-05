<?php

namespace App\Http\Controllers;

use App\Task;
use App\Blog;

use Illuminate\Http\Request;

class BlogTasksController extends Controller
{
    public function store(Blog $blog)
    {
        $blog->addTask(
        request()->validate(['description' => 'required'])
        );
        
        return back();
    }

    public function update(Task $task)
    {
        $task->update([
        'completed' => request()->has('completed')
        ]);
        
        return back();
        
    }

}
