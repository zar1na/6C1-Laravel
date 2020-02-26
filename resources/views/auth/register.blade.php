@extends('layouts.app')
@section('title', 'Register')

@section('content')
<h2>Register</h2>
<div class="ex2" style="background-color:#FFF0F5">
<form class="form-horizontal" method="POST" action="/register">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="padding: 15px 15px 15px 0px;">
        <label for="name" class="col-md-4 control-label" style="color:black;">Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                <div class="col-md-6">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                </div>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="padding: 0px 15px 15px 0px;">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
            <div class="col-md-6">
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            </div>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="padding: 0px 15px 15px 0px;">
        <label for="password" class="col-md-4 control-label">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
            <div class="col-md-6">
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            </div>
            @endif
        </div>
    </div>

    <div class="form-group" style="padding: 0px 15px 15px 0px;">
        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group" style="padding: 0px 15px 15px 0px;">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
</form>
</div>
@endsection
