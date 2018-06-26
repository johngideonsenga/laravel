@extends('layouts.master')

@section('content')
  <div>
    <h1>Sign in</h1>
    <form method="POST" class="" action="/login">
      {{csrf_field()}}

      <div class="form-group">
        Email: <input type="email" name="email" id="email"  required>
      </div>
      <div class="form-group">
        Password: <input type="password" name="password" id="password"  required>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
@endsection