@extends('layouts.app')
@section('title', 'Colab Document')
<title>Colab Document</title>

@section('content')
<h2>{{ $document->title }}</h2>

<div class="links">
<a href="/documents/1">Document 1</a>
<a href="/documents/2">Document 2</a>
<a href="/documents/3">Document 3</a>
</div>

<div class="ex2" style="background-color:#E0FFFF">
<h4>{{ $document->body }}</h4>

<h5 style="margin-left: -250;"> Recently Adjusted By..</h5>
@foreach($document->adjustments as $user)
<h5>> {{ $user->name }} ( {{ $user->pivot->updated_at->diffForHumans() }} )</h5>
@endforeach

</div>
@endsection