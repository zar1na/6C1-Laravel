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

</div>

@endsection