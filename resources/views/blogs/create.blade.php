@extends('layouts.app')

@section('title', 'Create')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center;background-color:hsla(48, 89%, 95%)">
                <h2 style="color:hsla(48, 89%, 53%)">Create A Blog</h2>
                </div>

                <div class="panel-body" style="text-align:center">
                    <form method="POST" action="/blogs">
                    {{ csrf_field() }}

                    <div style="margin-bottom: 1em;">
                    <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                    name="title"
                    value="{{ old('title') }}">
                    </div>

                <div style="margin-bottom: 1em;">
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}">{{ old('description') }}</textarea>
                </div>

                <div>
                <button type="submit" class="button is-link" style="margin-bottom: 0.5em;">Create Blog</button>
                </div>
                @include ('errors')
                </form>
                </div>
            </div>
      </div>
</div>
@endsection
