@extends('layouts.master')

@section('content')
  <div>
    Register
    <form method="POST" class="" action="/register">
      {{csrf_field()}}
      <div class="form-group">
        Name: <input type="text" name="name" id="name"  required>
      </div>
      <div class="form-group">
        Email: <input type="email" name="email" id="email"  required>
      </div>
      <div class="form-group">
        Password: <input type="password" name="password" id="password"  required>
      </div>
      <div class="form-group">
        Password Confirmation: <input type="password" name="password_confirmation" id="password_confirmation"  required> 
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
    @include('layouts.errors')
  </div>
@endsection