@extends('master')

@section('content')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Account ID</th>
        <th scope="col">Currency</th>
        <th scope="col">Balance</th>
        <th scope="col">Spend</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($accounts as $account)
          <th scope="row"> {{ $account->id }} </th>
          <td>{{ $account->account_id }}</td>
          <td>RM</td>
          <td>1000.00</td>
          <td>500.00</td>
          <td>1500.00</td>
        @endforeach
      </tr>
    </tbody>
  </table>
@endsection
