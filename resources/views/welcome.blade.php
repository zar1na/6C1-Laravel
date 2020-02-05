@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center;background-color:hsla(168, 55%, 94%)">
                <h2 style="color:hsla(168, 55%, 65%)">Welcome</h2></div>

                <div class="panel-body">
                    <ul>
                    @foreach($data as $data)
                    <li>{{ $data }}</li>
                    @endforeach
                    </ul> 
                </div>
             </div>
          </div>
      </div>
</div>
@endsection