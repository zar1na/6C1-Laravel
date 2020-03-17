@extends('layouts.app')
@section('title', 'Blogs')

@section('content')
<h2>Blogs</h2>

<div class="ex2" style="background-color:#E6E6FA">
@foreach($blogs as $blog)
<h4><a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a>
 (created by: {{ $blog->owner->name }})</h4>
@endforeach

<div class="session">
@if (session('created'))
<h5 style="color:green">{{ session('created') }}</h5>
@endif
@if (session('deleted'))
<h5 style="color:red">{{ session('deleted') }}</h5>
@endif
</div>

</div>


@endsection