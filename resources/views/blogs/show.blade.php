@extends('layouts.app')

@section('title', 'Show')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="panel-heading" style="background-color:hsla(204, 70%, 95%)">
                <h2 style="text-align:center;color:hsla(204, 70%, 53%)">{{ $blog->title }}</h2>
                @can('update', $blog)
                    <h7>
                    <a style="font-size:14px" href="/blogs/{{ $blog->id }}/edit">Edit?</a>
                    </h7>
                @endcan
                <div><h7 style="font-size:18px">
                   Created by: {{ $blog->owner->name }}
                </h7></div>
                <div style="font-size:14px"><h7>
                   Created @ {{ $blog->created_at }}
                    </h7></div>
                </div>
                
                <div class="panel-body">
                    <h3>{{ $blog->description }}</h3>
                    @if ($blog->tasks->count())
                    <div>
                      @foreach ($blog->tasks as $task)
                        <div>
                        <form method="POST" style="margin-bottom: 0.5em;" action="/tasks/{{ $task->id }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <label class="checkbox"  {{ $task->completed ? 'is-complete' : '' }} for="completed">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                         </label>
                         </form>
                        </div>
                     @endforeach
                    </div>
                  @endif
                
                  <form method="POST" action="/blogs/{{ $blog->id }}/tasks" class="box">
                  {{ csrf_field() }}
                  <div class="field">
                  <label class="label" for="description" style="margin-bottom: 0.5em;">New Task</label>
                    <div class="control">
                  <input type="text" class="input" name="description" placeholder="New Task" required style="margin-bottom: 0.5em;">
                    </div>
                  </div>
                  <div class="field">
                    <div class="control">
                  <button type="text" class="button is-link" style="margin-bottom: 0.5em;">Add Task</button>
                    </div>
                  </div>
                  @include ('errors')
                  </form>
                  </div>
             </div>
          </div>
      </div>
</div>
@endsection
