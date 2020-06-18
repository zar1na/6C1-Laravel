@extends('layouts.app')
@section('title', 'Blue')

@section('content')
<h2>Blue</h2>

<div class="ex2" style="background-color:#c2c2d6">
@foreach($data as $data)
<h4>{{ $data }}</h4>
@endforeach
</div>

@endsection