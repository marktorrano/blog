@extends('template')


    @section('content')
    
    <article class="post">
            <header>
                <div class="title">
                    <h2><a href="#">{{$post->title}}</a></h2>
                    <p>{{$post->subtitle}}</p>


                    @if(Auth::user()->admin_status == 1)
                    <span><a href="{{url('posts/'.$post->id.'/edit')}}">Edit</a></span>
                    @endif
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-11-01">{{$post->created_at}}</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="{{url('images/avatar.jpg')}}" alt="" /></a>
                </div>
            </header>
            <a href="#" class="image featured"><img src="{{url('images/pic01.jpg')}}" alt="" /></a>
            <p>{{$post->content}}</p>
            
            <?php 
                $comments = \App\Models\Comment::find($post->id)->post->comment;   
                
            ?>
            
            @foreach($comments as $comment)
            <div class="comments">
                <span><a href="{{url('comments/'.$comment->id.'/delete')}}">x</a></span>
                <h3>{{$comment->user->firstname}} {{$comment->user->lastname}} </h3>
                <p>{{$comment->content}}</p>
                
            </div>
            @endforeach
            <h2>Comments</h2>
            
            
            <br>
            {!! Form::open(array('url' => 'comments')) !!}
            {!! Form::textarea('content') !!}
            {!! Form::hidden('post_id', $post->id) !!}
            {!! Form::hidden('user_id', Auth::user()->id) !!}
            {!! Form::submit('Post') !!}
            {!! Form::close() !!}

        </article>
    
   
  @stop