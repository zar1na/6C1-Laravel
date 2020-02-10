@extends('layouts.app')
@section('title', 'Blogs')
<title>{{ $blog->title }}</title>

@section('content')
<h2>{{ $blog->title }}</h2>

<div class="ex2" style="background-color:#E0FFFF">
<h4>{{ $blog->description }}</h4>

<h5>
<a href="/blogs/{{ $blog->id }}/edit">Edit</a>
</h5>

@if ($blog->comments->count())
<div style="padding: 0px 15px 15px 0 px;">
@foreach ($blog->comments as $comment)
<form method="POST" action="/comments/{{ $comment->id }}">
{{ method_field('PATCH') }}
{{ csrf_field() }}

<label class="checkbox" for="completed">
<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $comment->completed ? 'checked' : '' }}>
{{ $comment->description }}
</label>
</form>
@endforeach
</div>
@endif

<div style="padding: 0px 15px 15px 0px;">
<form method="POST" action="/blogs/{{ $blog->id }}/comments" class="box">
{{ csrf_field() }}

<div style="padding: 5px 15px 15px 0px;">
<label class="label" for="description">Add a Comment</label>
</div>
<div style="padding: 0px 15px 15px 0px;">
<input type="text" class="input" name="description" placeholder="New Comment">
</div>

<div style="padding: 0px 15px 15px 0px;">
<button type="submit" class"button is-link">Submit</button>
</div>
</div>
@include ('errors')
</form>

</div>
@endsection