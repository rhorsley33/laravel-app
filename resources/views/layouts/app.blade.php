<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <title>{{config('app.name', 'LSAPP')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container mt-5">
        @include('inc.messages')
        @yield('content')
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>