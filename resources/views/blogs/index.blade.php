@extends('layouts.app')
@section('title', 'Blogs')

@section('content')
<h2>Blogs</h2>

<div class="ex2">
@foreach($blogs as $blog)
<h4><a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a></h4>
@endforeach
</div>


@endsection