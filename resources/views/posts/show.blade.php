@extends('layouts.master')

@section ('content')

  <h1>{{$post->title}}</h1>
  {{$post->body}}
  <hr>
  <div class="comments">
    <ul class="list-group">
    @foreach($post->comments as $comment)

        <li class="list-group-item">
          <strong>
            {{$comment->created_at->diffForHumans()}}: &nbsp
          </strong>
          {{$comment->body}}
        </li>
    @endforeach
  </ul>
  <hr>
  <div >
    
    <form class="form-group" method="POST" action="/posts/{{$post->id}}/comments">
      {{csrf_field()}}
      <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>  
      <button type="submit" class="btn btn-primary">Add Comment</button>
    </form>
    @include('layouts.errors')
  </div>
  </div>
@endsection