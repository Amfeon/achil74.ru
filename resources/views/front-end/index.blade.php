@extends('front-end.app')
@section('content')
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
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card_img">
                            <img src="/images/w1.jpg ">
                            <div class="card_price">Цена: 3000</div>
                        </div>
                        <div class="card_text"><p>Кошель из шкуры с жопы дракона</p></div>
                        <a class="card_botton">Заказать</a>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card_img">
                            <img src="/images/w2.jpg ">
                            <div class="card_price">Цена: 300</div>
                        </div>
                        <div class="card_text"><p>Кошель из шкуры с жопы дракона, но не девственной</p></div>
                        <a class="card_botton">Заказать</a>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card_img">
                            <img src="/images/w3.jpg ">
                            <div class="card_price">Цена: почти даром</div>
                        </div>
                        <div class="card_text"><p> Материал – итальянская натуральная кожа растительного дубления 1,6мм (КРС), вощеный шнур, металлическая кнопка(никель). Плюс аякий там текст текс ттекстте кстт ексттекст</p></div>
                        <a class="card_botton">Заказать</a>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
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
@endsection