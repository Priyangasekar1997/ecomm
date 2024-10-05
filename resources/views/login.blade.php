@extends('masterpage')
@section("content")
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <form action="/login"method="POST">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control"name="email" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Login</button>
  @csrf
</form>
</div>
</div>
</div>
@endsection
