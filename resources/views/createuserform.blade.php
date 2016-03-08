@extends('template')


    @section('content')
    
    
    <article class="post">
        <h2>Register</h2>
        {!! Form::open(array('url' => 'users', 'files' => 'true', 'enctype' => "multipart/form-data")) !!}
        
        {!! Form::label('username', 'Username'); !!}
        {!! Form::text('username'); !!}
        {!! $errors->first('username', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('firstname', 'First Name'); !!}
        {!! Form::text('firstname'); !!}
        {!! $errors->first('firstname', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('lastname', 'Last Name'); !!}
        {!! Form::text('lastname'); !!}
        {!! $errors->first('lastname', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('email', 'Email'); !!}
        {!! Form::text('email'); !!}
        {!! $errors->first('email', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('password', 'Password'); !!}
        {!! Form::password('password'); !!}
        {!! $errors->first('password', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('password_confirmation', 'Confirm Password'); !!}
        {!! Form::password('password_confirmation'); !!}
            <br>
        {!! Form::label('photo','Choose Photo',array('id'=>'','class'=>'button')) !!}
        {!! $errors->first('photo', '<p class="error">:message</p>')!!}
        {!! Form::file('photo','',array('id'=>'','class'=>'')) !!}
            <br>
        {!! Form::submit('Register');   !!}
        {!! Form::close() !!}
    </article>
   
  @stop