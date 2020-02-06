@extends('layouts.app')
@section('title', 'Edit')

@section('content')
<div class="tb" style="background-color:hsla(168, 55%, 94%)">
<h2 style="color:hsla(168, 55%, 65%)">Currently Editing: {{ $blog->title }}</h2></div>

<div class="ex2">
<form method="POST" action="/blogs/{{ $blog->id }}">
{{ csrf_field() }}
{{ method_field('PATCH') }}

    <div style="padding: 15px 15px 15px 15px;">
     <label class="label" for="title">Title</label>
     <input type="text" class="input" name="title" placeholder="Title" value="{{ $blog->title }}">
     </div>

    <div style="padding: 0px 15px 15px 15px;">
    <label class="label" for="description">Description</label>
    <textarea name="description" class="textarea">{{ $blog->description }}</textarea>
    </div>
    
    <div style="padding: 0px 15px 15px 15px;">
    <button type="submit">Update the Blog</button>
    </div>
    
</form>

<form method="POST" action="/blogs/{{ $blog->id }}">
{{ csrf_field() }}
{{ method_field('DELETE') }}

     <div style="padding: 0px 15px 15px 15px;">
     <button type="submit" class="button">Delete the Blog?</button>
     </div>
</form>

</div>

@endsection