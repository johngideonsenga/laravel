@extends('layouts.master')

@section('content')

  <h1>Publish a Post</h1>
  <hr>
  <form method="POST" action="/posts">
    {{csrf_field()}} <!--always include this inside forms-->
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" >
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control" cols="30" rows="5" ></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>
  </form>

  @include('layouts.errors')
@endsection