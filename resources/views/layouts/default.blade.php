<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>@yield('title', 'Blog') | NealCaffrey</title>
    <meta name="description" content="NealCaffrey's Personal Blog">
    <meta name="keywords" content="NealCaffrey,PHP,MYSQL,Linux,Web,Algorithm,Review,Other,Elasticsearch,Laravel,ThinkPHP,Go,Python">
    <meta name="author" content="NealCaffrey">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')
</head>
<body>
  <div id="app">
    @include('layouts._header')

    <div class="container" id="content">
      <div class="row">
        <div class="col-md-9">
          @yield('content')
        </div>
        <div class="col-md-3">
          @include('layouts._sidebar')
        </div>
      </div>
    </div>

    @include('layouts._footer')
  </div>
<script src="{{ mix('js/app.js') }}"></script>
@yield('js')

</body>
</html>
