@extends('template')


    @section('content')
    <article class="post">
    @foreach($posts as $post)
    
    
								<header>
									<div class="title">
										<h2><a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a></h2>
										<p>{{$post->subtitle}}</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{$post->created_at}}</time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="{{url('images/avatar.jpg')}}" alt="" /></a>
									</div>
								</header>
								<a href="{{url('posts/'.$post->id)}}" class="image featured"><img src="{{url('images/'.$post->photo)}}" alt="" /></a>
								<p>{{$post->content}}</p>
                                        
    @endforeach
        
</article>
											
    @stop