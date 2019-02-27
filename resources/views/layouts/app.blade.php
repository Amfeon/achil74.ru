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
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/summernote-lite.css')}}">
    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="/js/admin.js" rel="script"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="\admin">Админ панель Achill</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">На сайт</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tasks')}}">Заявки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('application')}}">Услуги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category')}}">Категории</a>
            </li>
        </ul>
    </div>
</nav>
    <div id="app">
          @yield('content')
    </div>

    <!-- Scripts -->
<script src="{{asset('js/summernote-lite.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
</body>
</html>
