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
    <link href="{{ asset('css/fontello.css') }}" rel="stylesheet">
</head>
<body>
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <div class="phone-block">
                   <a  class = "phone" href="tel:+79026011595"> +7 (902) 601-15-95</a>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="logotip">
                    <a href="/"><img src="css/img/logo-y.svg"></a>
                    <span class="logotip-text">Achill</span>
                    <span class="logotip-text-small">Leather craft</span>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <a class="phone" href="mailto:achill74@mail.ru">achill74@mail.ru</a>
            </div>
        </div>
    </div>
</section>
<div id="app">
@yield('content')
<!-- app -->

    <modal v-if="showModal" v-on:close="closeBotton" v-on:done="doneBotton">
    </modal>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<footer class="footer">
    <div class="container">
        <div class="row">
            <h3 class="footer-title">Контакты</h3>
            <div class="col-lg-6">
                <ul>
                    <li>Телефон:  <a  class = "phone" href="tel:+79026011595"> +7 (902) 601-15-95</a> </li>
                    <li>Телефон:  <a  class = "phone" href="tel:+79026011595"> +7 (902) 601-15-95</a> </li>
                    <li> Почта:   <a class="phone" href="mailto:achill74@mail.ru">achill74@mail.ru</a></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="social">
                    <ul>
                        <li class="social__item"><a href="#"> <i class="demo-icon icon-vkontakte"></i></a></li>
                        <li class="social__item"><a href="https://www.instagram.com/achill174"> <i class="demo-icon icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
