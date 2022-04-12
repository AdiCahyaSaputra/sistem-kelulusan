<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>{{ $title }}</title>
  <style>
    * {
      -webkit-tap-highlight-color: transparent;
      transition: all .1s;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    /* /* Hide scrollbar for IE, Edge and Firefox */
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

  </style>
</head>
<body>
  @yield("content")
</body>
</html>