@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Task</th>
                    <th>Status</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', 'New Task', [], ['class' => 'btn btn-secondary']) !!}
    {!! link_to_route('login.get', 'Log in', [], ['class' => 'btn btn-secondary']) !!}
    {!! link_to_route('logout.get', 'Log out', [], ['class' => 'btn btn-secondary']) !!}
    {!! link_to_route('signup.get', 'Registration', [], ['class' => 'btn btn-secondary']) !!}


@endsection
