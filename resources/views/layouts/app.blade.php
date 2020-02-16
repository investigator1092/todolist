<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todos list</title>
</head>
<body>
    @include('inc/navbar')
    @include('inc/messages')
    <div class="mx-auto" style="width: 80%;">
        @yield('content')
    </div>
</body>
<footer class="text-center">Copyright 2020</footer>
</html>
