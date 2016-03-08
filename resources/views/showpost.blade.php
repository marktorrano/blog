@extends('template')


    @section('content')
    
    <article class="post">
            <header>
                <div class="title">
                    <h2><a href="#">{{$post->title}}</a></h2>
                    <p>{{$post->subtitle}}</p>
                    
                    

                    @if(Auth::user()->admin_status == 1)
                    
                    @endif
                    
                    
                </div>
                <div class="meta">
                    <span>Posted</span>
                    <time class="published" datetime="2015-11-01">{{$post->created_at}}</time>
{{--                <a href="#" class="author"><span class="name"></span><img src="{{url('images/avatar.jpg')}}" alt="" /></a> --}}
                </div>
            </header>
            <a href="#" class="image featured"><img src="{{url('images/'. $post->photo)}}" alt="" /></a>
            <p>{{$post->content}}</p>
            <h2>Comments</h2>
            <?php 
                $comments = \App\Models\Post::find($post->id)->comment;                   
            ?>
            <div class="comment-container">
            @foreach($comments as $comment)
            <div class="comments">
                @if(Auth::user()->admin_status == 1 || (Auth::user()->id == $comment->user->id))
                    {!! Form::open(array('url' => 'comments/' .$comment->id, 'method' => 'delete')) !!}
                    {!! Form::submit('x', ['class' => 'delete'])!!}                
                    {!! Form::close() !!}
                @endif
                <h3>{{$comment->user->firstname}} {{$comment->user->lastname}} </h3>
                <p>{{$comment->content}}</p>
                <span class="diffForHumans">{{$comment->created_at->diffForHumans()}}</span>
                <br/>
                
            </div>
            @endforeach
              </div>
              <br>
              <span>Reply to this post</span>
            
            {!! Form::open(array('method' => 'POST', 'action' => 'CommentController@store')) !!}
            {!! Form::textarea('content') !!}
            <br/>
            {!! Form::hidden('post_id', $post->id) !!}
            {!! Form::hidden('user_id', Auth::user()->id) !!}
            {!! Form::hidden('firstname', Auth::user()->firstname) !!}
            {!! Form::hidden('lastname', Auth::user()->lastname) !!}
            {!! Form::submit('Reply', ['class' => 'send']) !!}
            {!! Form::close() !!}
        
            @if(Auth::user()->admin_status == 1)
                {!! Form::open(array('url' => 'posts/' .$post->id, 'method' => 'delete')) !!}
                <span><a href="{{url('posts/'.$post->id.'/edit')}}" class="button">Edit</a></span>
                {!! Form::submit('delete', ['class' => 'button'])!!}                
                {!! Form::close() !!}
            @endif

        </article>
    
   
  @stop