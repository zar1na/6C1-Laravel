@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center;background-color:hsla(204, 70%, 95%)">
                <h2 style="color:hsla(204, 70%, 53%)">Currently Editing: {{ $blog->title }}</h2>
                </div>

                <div class="panel-body" style="text-align:center">
                    <form method="POST" action="/blogs/{{ $blog->id }}" style="margin-bottom: 0.5em;">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                        <div class="field" style="margin-bottom: 1em;">
                        <label class="label" for="title">Title</label>
                            <div class="control">
                            <input type="text" class="input" name="title" placeholder="Title" value="{{ $blog->title }}">
                            </div>
                        </div>
                        
                        <div class="field" style="margin-bottom: 1em;">
                        <label class="label" for="description">Description</label>
                            <div class="control">
                            <textarea name="description" class="textarea">{{ $blog->description }}</textarea>
                            </div>
                        </div>
                        
                        <div>
                        <button type="submit">Update Blog</button>
                        </div>
                        </form>
                        
                        <form method="POST" action="/blogs/{{ $blog->id }}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <div class="field">
                            <div class="control">
                            <button type="submit" class="button">Delete the Blog?</button>
                            </div>
                        </div>
                        </form>
                  </div>
             </div>
          </div>
      </div>
</div>
@endsection