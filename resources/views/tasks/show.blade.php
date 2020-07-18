@extends('layouts.app')

@section('content')

    <h1>Task ID: {{ $task->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'Edit', ['task' => $task->id], ['class' => 'btn btn-secondary']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger mt-1']) !!}
    {!! Form::close() !!}

@endsection