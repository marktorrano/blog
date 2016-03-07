@extends('template')
                           
   @section('content')
    <article class="post">
        <h2>Create Post</h2>
        {!! Form::open(array('url' => 'posts', 'files' => 'true', 'enctype' => "multipart/form-data")) !!}
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title'); !!}
        {!! $errors->first('title', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('subtitle', 'Sub-title'); !!}
        {!! Form::text('subtitle'); !!}
        {!! $errors->first('subtitle', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('content', 'Content'); !!}
        {!! Form::textarea('content'); !!}
        {!! $errors->first('content', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::label('photo','Photo',array('id'=>'','class'=>'')) !!}
        {!! Form::file('photo','',array('id'=>'','class'=>'')) !!}
            <br>
        {!! Form::submit('Post');   !!}
        {!! Form::close() !!}
    </article>

@stop