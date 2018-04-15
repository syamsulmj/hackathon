@extends('master')

@section('content')
  <div class="card">
    <div class="card-header">
      <p class="font-weight-Normal text-info" >Account Opening Application.</p>
    </div>
    <div class="card-body">
    <form method="post" action="{{ action('ProfileController@create') }}">
      {{ csrf_field() }}
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputUser">User</label>
          <input type="Username" class="form-control" name="username">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" name="password" >
        </div>
        <div class="form-group col-md-6 ">
          <label for="inputAge">Name</label>
          <input type="text" class="form-control" name="name" >
        </div>
        <div class="form-group col-md-2 ">
          <label for="inputCitizen">Citizen</label>
          <input type="text" class="form-control" name="citizen" >
        </div>
        <div class="form-group col-md-2 ">
          <label for="inputRace">Race</label>
          <input type="text" class="form-control" name="race" >
        </div>
        <div class="form-group col-md-2 ">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" name="phone" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="text" class="form-control" name="email" >
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="address" >
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" name="address2" >
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" name="city">
        </div>
        <div class="form-group col-md-4">
          <label for="state">State</label>
          <select name="state" class="form-control">
            <option selected>Choose...</option>
            <option>Terengganu</option>
            <option>Selangor</option>
            <option>Sarawak</option>
            <option>Sabah</option>
            <option>Perlis</option>
            <option>Perak</option>
            <option>Penang</option>
            <option>Pahang</option>
            <option>N.Sembilan</option>
            <option>Melaka</option>
            <option>Kelantan</option>
            <option>Kedah</option>
            <option>Johor</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" name="zip">
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
@endsection
