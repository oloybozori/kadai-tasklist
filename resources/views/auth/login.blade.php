@extends('layouts.app')

@section('content')
    <h1>Log in</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::open(['route' => 'login.post']) !!}

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                    {!! Form::submit('Log in', ['class' => 'btn btn-secondary btn-block']) !!}
            {!! Form::close() !!}
            
            {!! link_to_route('signup.get', 'Registration', [], ['class' => 'btn btn-secondary btn-block mt-4']) !!}</p>
            
        </div>
    </div>

@endsection