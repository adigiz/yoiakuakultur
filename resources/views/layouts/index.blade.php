<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yoiakuakultur Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <!-- Styles -->
    <style>
        .section {
            min-height: 100vh;
        }
    </style>
</head>

<body>
    {{-- @include('components/navbar') --}}
    <div id="app">
        @yield('section')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>