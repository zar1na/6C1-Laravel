@extends('layouts.app')
@section('title', 'Pink')

@section('content')
<h2>Pink</h2>

<div class="ex2" style="background-color:#b3ffe6">
@foreach($data as $data)
<h4>{{ $data }}</h4>
@endforeach
</div>

@endsection