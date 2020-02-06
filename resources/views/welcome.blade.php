@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<div class="tb" style="background-color:hsla(168, 55%, 94%)">
<h2 style="color:hsla(168, 55%, 65%)">Welcome</h2></div>

<div class="ex2">
<ul>
@foreach($data as $data)
<li>{{ $data }}</li>
@endforeach
</ul> 
</div>

@endsection