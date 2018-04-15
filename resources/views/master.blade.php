<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="{{asset('/js/app.js')}}"></script>
    <title>Hackathon</title>
  </head>
  <body>
    @if (url()->current() == action('HomeController@login') || url()->current() == action('HomeController@register'))
      <div style="margin-top: 100px">

      </div>
    @else
      @include('shared.nav')
    @endif

    @yield('content')

  </body>
</html>
