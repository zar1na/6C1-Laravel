@extends('layouts.app')
@section('title', 'Create')

@section('content')
<div class="tb" style="background-color:hsla(168, 55%, 94%)">
<h2 style="color:hsla(168, 55%, 65%)">Create A Blog</h2></div>

<div class="ex2">
<form method="POST" action="/blogs">
{{ csrf_field() }}

    <div style="padding: 15px 15px 15px 15px;">
     <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}" placeholder="Blog Title">
     </div>

    <div style="padding: 0px 15px 15px 15px;">
    <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Blog Description">{{ old('description') }}</textarea>
    </div>
    
    <div style="padding: 0px 15px 15px 15px;">
    <button type="submit" class="button is-link">Create Blog</button>
    </div>
    @include ('errors')
</form>
</div>

@endsection