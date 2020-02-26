<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    // now only logged in users can view blogs
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        // only allows 'guests' to see these pages
    }

    public function index()
    {
        $blogs = Blog::all();
        // using Eloquent which is Laravel's active record implementation
        
        // auth()->user() :gives user instance for who is signed in
         // $blogs = Blog::where('owner_id', auth()->id())->get();
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
        
        // send to the creator of the blog
        $attributes['owner_id'] = auth()->id();
        
        $blog = Blog::create($attributes);
       
        return redirect('/blogs');

    }

    public function show(Blog $blog)
    {
        $this->authorize('update', $blog);
        // authorize using policy gives the same results
        
        // object oriented approch
        //abort_unless(auth()->user()->owns($blog), 403);
        
        //abort_if(\Gate::denies('update', $blog), 403);
        // if gate denies then it aborts
        
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }
    
    public function update(Blog $blog)
    {
        $attributes = request()->validate([
        'title' => ['required', 'min:3'],
        'description' => ['required', 'min:3']
        ]); 
        
        $blog->update(request(['title', 'description']));
        
        return redirect('/blogs');

    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/blogs');

    }



}
