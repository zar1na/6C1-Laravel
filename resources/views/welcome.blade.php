@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<h2>Welcome</h2>

<div class="ex2" style="background-color:#FFB6C1">
@foreach($data as $data)
<h4>{{ $data }}</h4>
@endforeach
</div>

@endsection