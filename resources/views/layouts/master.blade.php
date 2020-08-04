<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaris Barang SMK Mahaputra</title>
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
</head>
<body>
    @include('layouts.navigation')
    @include('layouts.alert')
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ URL::to('/js/app.js') }}"></script>
</body>
</html>