@extends('template')
<?php $user = \App\Models\User::where('admin_status', '=', '0')?>
    @section('content')
    <article class="post">
    @foreach($posts as $post)
        <header>
            <div class="title">
                <h2><a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a></h2>
                <p>{{$post->subtitle}}</p>
            </div>
            <div class="meta">
                <span>Posted</span>
                <time class="published" datetime="2015-11-01">{{$post->created_at}}</time>
                <a href="#" class="author"><span class="name"></span></a>
            </div>
        </header>
        <a href="{{url('posts/'.$post->id)}}" class="image featured"><img src="{{url('images/'.$post->photo)}}" alt="" /></a>
        <p>{{$post->content}}</p>
                                        
    @endforeach
        
</article>
											
    @stop