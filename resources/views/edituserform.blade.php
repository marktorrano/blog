@extends('template')


    @section('content')
    
    
    <article class="post">
        <h2>Register</h2>
        {!! Form::model($user, array('url' => 'users/'.$user->id,'method' => 'put','files' => 'true', 'enctype' => "multipart/form-data")) !!}

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

        {!! Form::submit('Update');   !!}
        {!! Form::close() !!}
    </article>
   
  @stop