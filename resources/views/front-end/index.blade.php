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
            @foreach($data as $item)
            <div class="row mt-1">
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <div class="card_img">
                            <img src="/storage/{{$item->src}} ">
                            <div class="card_price">Цена: {{$item->price}} рублей</div>
                        </div>
                        <div class="card_text">{!! $item->text !!}</div>
                        <a class="card_botton">Заказать</a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </section>
@endsection