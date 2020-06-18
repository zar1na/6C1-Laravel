@extends('layouts.app')
@section('title', 'Email Only Login')

@section('content')
<h2>Email Only Login</h2>
<div class="ex2" style="background-color:#ffc2b3">
<div class="container">

<div class="panel-body">
    <form class="form-signin" method="POST">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="padding: 15px 15px 15px 0px;">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4" style="padding: 0px 15px 15px 0px;">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

            </div>
        </div>
    </form>
    
    <div class="session">
    @if (session('postLogin'))
    <h5 style="color:green">{{ session('postLogin') }}</h5>
    @endif
    </div>
    
</div>
</div>
</div>
@endsection
