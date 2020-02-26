@extends('layouts.app')
@section('title', 'Logged in')

@section('content')
<h2>Welcome</h2>

<div class="ex2" style="background-color:#AFEEEE">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3>Hello {{ Auth::user()->name }}</h3>
                
                <form method="POST" action="/logout">
                {{ csrf_field() }}
                <button type="submit" class="button is-link">Logout?</button>
                </form>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
</div>

@endsection
