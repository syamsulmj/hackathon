@extends('master')

@section('content')
  <div class="card">
    <div class="card-body mtx-auto">
    All Log.
    </div>
  </div><br>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">HTTP Action</th>
        <th scope="col">Noun</th>
        <th scope="col">Business Operation</th>
        <th scope="col">Timestamp</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data_logs as $dl)
        <tr>
          <th scope="row">{{ $dl->id }}</th>
          <td>{{ $dl->HTTP_action }}</td>
          <td>{{ $dl->noun }}</td>
          <td>{{ $dl->business_operation }}</td>
          <td>{{ $dl->created_at }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
