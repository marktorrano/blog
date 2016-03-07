@extends('template')


    @section('content')
    
    <article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{$post->title}}</a></h2>
										<p>{{$post->subtitle}}</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{$post->created_at}}</time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="{{url('images/avatar.jpg')}}" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="{{url('images/pic01.jpg')}}" alt="" /></a>
								<p>{{$post->content}}</p>

								<h2>Comments</h2>
								<br>
								
								<form>
									<label>Comment</label>
									<textarea></textarea>
									<input type="submit" value="Post">
								</form>



					
							</article>
    
   
  @stop