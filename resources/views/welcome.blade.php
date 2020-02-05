@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
<div class="tb" style="background-color:hsla(168, 55%, 94%)">
<h2 style="color:hsla(168, 55%, 65%)">Welcome</h2></div>

<style>
div.tb {
  max-width:1000px;
  margin: auto;
  border: 1px solid #FFB6C1;
}
div.ex2 {
  max-width:500px;
  margin: auto;
  border: 5px solid #FFB6C1;
}
</style>


<div class="ex2">
<ul >
@foreach($data as $data)
<li>{{ $data }}</li>
@endforeach
</ul> 
</div>

@endsection