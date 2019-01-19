<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<section class="header-logo">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-8"><h1 class="text-center">Кожевенная мастерская Дениса Распопова - ACHILL </h1></div>
            <div class="col-lg-4">
                <div class="phone-block">

                </div>
            </div>
        </div>

    </div>
</section>

    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<footer>

</footer>
</body>
</html>
