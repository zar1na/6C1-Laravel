<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Blog;

class BlogsCommentsController extends Controller
{
    
    public function store(Blog $blog)
    {
       $attributes = request()->validate(['description' => 'required']);
        $blog->addComment(request('description'));
        /* Task::create([
        'blog_id' => $blog->id,
        'description' => request('description')
        ]);
        */
        return back();
    }
    
    
    public function update(Comment $comment)
    {
       $comment->update([
        'liked' => request()->has('liked')
        ]);
        
        /*$method = request()->has('completed') ? 'complete' : 'incomplete';
        $comment->$method();
        */
        
        return back();
    }
}
