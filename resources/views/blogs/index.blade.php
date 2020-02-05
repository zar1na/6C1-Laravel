@extends('layouts.app')

@section('title', 'Blogs')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center;background-color:hsla(204, 70%, 95%)">
                <h2 style="color:hsla(204, 70%, 53%)">Blogs</h2>
                </div>
                
                @if (session('created'))
                <h4 style="text-align:center;background-color:hsla(6, 54%, 95%);padding:10px;color:hsla(6, 54%, 57%)">
                {{ session('created') }}</h4>
                @endif

                <div class="panel-body" style="font-size:18px">
                    @foreach ($blogs as $blog)
                    <ul>
                    <a href="/blogs/{{ $blog->id }}">
                    {{ $blog->title }}
                    </a>
                     <div style="font-size:14px">
                    <h7>
                    Created by: {{ $blog->owner->name }}
                    </h7>
                    </div>
                    </ul>
                    @endforeach
                </div>
             </div>
          </div>          
    </div>
</div>
@endsection