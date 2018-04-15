@extends('master')

@section('content')
  <div class="text-center">
    <img src="https://t3.ftcdn.net/jpg/00/63/42/06/240_F_63420609_fbNlw2e6xo894rDm9w8LOsB8bLcAxfBT.jpg" class="rounded" alt="...">
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
  @endif
  <form method="post" action="{{ action('HomeController@check_login') }}">
    {{ csrf_field() }}
    <div class="mx-auto" style="width: 400px;">
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input name="username" type="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
      </div>
      <label for="inputPassword5">Password</label>
      <input name="password" type="password" id="inputPassword5" class="form-control" placeholder="Password">
      <small id="passwordHelpBlock" class="form-text text-muted">
        Your password must be 8-20 characters long  <br>
         <a href="{{ @action('HomeController@register') }}" class="card-link">Create New Account </a><br><br>
         <button class="btn btn-primary" type="submit">Login</button>
      </small>
    </div>
  </form>
@endsection
