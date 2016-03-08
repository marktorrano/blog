@extends('template')
                           
   @section('content')
    <article class="post">
        <h2>Edit Post</h2>
        {!! Form::model($post, array('url' => 'posts/'.$post->id, 'method'=>'put', 'files' => 'true', 'enctype' => "multipart/form-data")) !!}
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
        {!! $errors->first('photo', '<p class="error">:message</p>')!!}
            <br>
        {!! Form::submit('Update');   !!}
        {!! Form::close() !!}
    </article>

@stop