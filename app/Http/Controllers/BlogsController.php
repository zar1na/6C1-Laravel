<?php

namespace App\Http\Controllers;

use App\Blog;

use App\Events\BlogCreated;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // now only logged in users can view blogs
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
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
        ]); // will automatically redirect if not valid
        
        // send to the creator of the blog
        $attributes['owner_id'] = auth()->id();
        
        // Blog::create($attributes);
        $blog = Blog::create($attributes);
        
       // event(new BlogCreated($blog));
        
        /*Mail::to($blog->owner->email)->send(
        // queue
        new BlogCreated($blog)
        );
        */
        
        // validate the blog and save the blog
        session()->flash('created', 'Your blog has been created!');
        // stores for single request and if refreshed it will no longer be there
        
        return redirect('/blogs');
    }

    public function show(Blog $blog)
    {
        //$this->authorize('update', $blog);
        // authorize using policy gives the same results
       // abort_unless(auth()->owns($blog), 403);
        //abort_if(\Gate::denies('update', $blog), 403);
        
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
