<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;

use App\Models\Post;
use Carbon\Carbon;


class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only'=>['store','create','edit','update','delete','show']]);   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::paginate(1);
        
        return view('browseblog', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('createpostform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        
        $post = Post::create($request->all());
        
        $newName = "photo". $post->id . ".jpg";
        
        $request->file('photo')->move('images', $newName);
        
        $post->photo = $newName;
        
        $post->created_at = Carbon::now();
        
        $post->deleted_at = null;
        
        $post->save();
        
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $post = Post::find($id);
        
        return view('showpost', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        
        $post = Post::find($id);
        
        return view('editpostform', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostRequest $request, $id)
    {
        //
        $post = Post::find($id);
        
        $post->fill($request->all());
        
        $newName = "photo". $post->id. ".jpg";
        
        $request->file('photo')->move("images", $newName);
        
        $post->photo = $newName;   
        
        $post->updated_at = Carbon::now();
        
        $post->save();
        
        return view('showpost', ['post'=>$post]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        
        $post->delete();
        
        return redirect('posts');
        
    }
}
