<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Mini-Weibo App')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    @include('layouts._header')

    <div class="container" style="margin-top: 7%;">
        <div class="offset-md-1 col-md-10">
            @include('shared._message')
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>

</body>
</html>
