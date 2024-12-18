<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>GameCorner</title>
</head>
<body>
    <div class="container">
        @include('layouts.nav')
        <x-header></x-header>
        <h1 class="bg-dark text-light p-2">@yield('title')</h1>
        @yield('content')
    </div>
</body>
</html>