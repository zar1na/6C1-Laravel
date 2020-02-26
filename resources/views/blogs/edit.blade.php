@extends('layouts.app')
@section('title', 'Edit')

@section('content')
<h2>Currently Editing...</h2>

<div class="ex2" style="background-color:#FFE4E1">
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
    @include ('errors')
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