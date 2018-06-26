<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
class PostsController extends Controller
{
    public function __construct(){
      // you must be signed in to create post
      $this->middleware('auth')->except(['index','show']);
    }

    //
    public function index(){
    //   $posts = Post::latest()->get();
    //  //$posts = Post::orderBy('created_at', 'desc')->get();
      
    //  //$posts = Post::latest();

    //   //if($month = request('month')){
    //   // $posts->whereMonth('created_at', Carbon::parse($month)->month);
    //   //}

    //   //if($year = request('year')){
    //   //  $posts->whereYear('created_at', $year);
    //   //}


    $posts = Post::latest()
      ->filter(request(['month', 'year']))
      ->get();

      $archives = Post::archives();
      return view ('posts.index', compact('posts'));
    }

    public function show(Post $post){
      return view ('posts.show', compact('post'));
    }

    public function create(){
      return view ('posts.create');
    }
    public function store(){

      //dd(request()->all());
      //dd(request('title'));
      //dd(request('body'));
      //dd(request(['title','body']));

      // $post = new Post;
      // $post->title = request('title');
      // $post->body = request('body'); 
      // $post->save(); //save to db

      // Post::create([
      //   'title' => request('title'),
      //   'body' => request('body')
      // ]);

      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      //Post::create(request(['title','body']));
      
      auth()->user()->publish(
        new Post(request(['title','body']))
      );

      // Post::create([
      //   'title' => request('title'),
      //   'body' => request('body'),
      //   'user_id' => auth()->id()
      // ]);

      return redirect('/');
    }
}
