@extends('template')
                           
   @section('content')
    <article class="post">
        <h2>Login</h2>
        {!! Form::open(array('url' => 'login')) !!}
        
        {!! Form::label('username', 'Username'); !!}
        {!! Form::text('username'); !!}
        {!! $errors->first('username', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('password', 'Password'); !!}
        {!! Form::password('password'); !!}
        {!! $errors->first('password', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::submit('Login');   !!}
        {!! Form::close() !!}
    </article>

@stop