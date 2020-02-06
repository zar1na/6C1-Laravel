<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        // using Eloquent which is Laravel's active record implementation
        
        // auth()->user() :gives user instance for who is signed in
         //$blogs = Blog::where('owner_id', auth()->id())->get();
        // adding where conditional to eloquent query
        
        return view('blogs.index', compact ('blogs'));
    }
    
    public function create()
    {
        return view('blogs.create');
    }
    
    public function store()
    {
       $attributes = request()->validate([
        'title' => ['required', 'min:3'],
        'description' => ['required', 'min:3']
        ]); 
        
        $blog = Blog::create($attributes);
       
        return redirect('/blogs');

    }

    public function show(Blog $blog)
    {        
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }
    
    public function update(Blog $blog)
    {
        $blog->update(request(['title', 'description']));
        
        return redirect('/blogs');

    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/blogs');

    }



}
