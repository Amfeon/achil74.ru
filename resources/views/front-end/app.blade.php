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
                <a class="phone" href="mailto:">Почта@gmail.com</a>
            </div>
        </div>
    </div>
</section>
<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_item">
                    <span class="main_subtext">Мастерская Дениса Распопова</span>
                    <h2 main="main_title"> Кожанные изделия ручной работы</h2>
                        <a class="main_botton" href="#">Посмотреть работы</a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="goods">
    <div class="container">
        <h3>Мои Работы</h3>
        <p>Я занимаюсь пошивом изделий из натуральной кожи. Все изделия изготавливаются мной индивидуально, с учетом всех пожеланий и исключительно вручную. Я уделяю огромное внимание качеству и очень трепетно подхожу к выбору материалов для производства.</p>
        <div class="row mt-1">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card_img">
                        <img src="/images/w1.jpg ">
                        <div class="card_price">Цена: 3000</div>
                    </div>
                    <div class="card_text"><p>Кошель из шкуры с жопы дракона</p></div>
                    <a class="card_botton">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card_img">
                        <img src="/images/w2.jpg ">
                        <div class="card_price">Цена: 300</div>
                    </div>
                    <div class="card_text"><p>Кошель из шкуры с жопы дракона, но не девственной</p></div>
                    <a class="card_botton">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card_img">
                        <img src="/images/w3.jpg ">
                        <div class="card_price">Цена: почти даром</div>
                    </div>
                    <div class="card_text"><p> Материал – итальянская натуральная кожа растительного дубления 1,6мм (КРС), вощеный шнур, металлическая кнопка(никель). Плюс аякий там текст текс ттекстте кстт ексттекст</p></div>
                    <a class="card_botton">Заказать</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<footer>

</footer>
</body>
</html>
