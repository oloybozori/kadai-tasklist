@extends('layouts.app')

@section('content')

    <h1>Edit {{ $task->content }}</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
            <div class="form-group">
                {!! Form::label('content', 'Task:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}    
            </div>

            <div class="form-group">
                {!! Form::label('status', 'Status:') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}    
            </div>
    
            {!! Form::submit('Update', ['class' => 'btn btn-secondary']) !!}
            
            {!! Form::close() !!}
        </div>

    </div>



@endsection