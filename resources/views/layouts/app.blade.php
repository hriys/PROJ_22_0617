<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>GoToキャンペーン管理システム</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/javascript.js') }}"></script>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
  <div id="app">
    @include('layouts/header')
    <main>
      @yield('content')
    </main>
  </div>
</body>

</html>
