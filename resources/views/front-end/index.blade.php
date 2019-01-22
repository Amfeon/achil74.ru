@extends('front-end.app')
@section('content')
    <section class="header">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 d-flex flex-column">
                    <span class="header-subtitle">Мастерская Дениса Распопова</span>
                    <h1 class="header-title">Оригинальные кожанные изделия ручной работы</h1>
                </div>
            </div>
        </div>
    </section>
<section class="servis">
    <div class="container text-center bg-light">
        <div class="row justify-content-center"><h2>Примеры работ</h2></div>

        <div class="row">
            <div class="desc">
                <p>Я занимаюсь пошивом изделий из натуральной кожи. Все изделия изготавливаются мной индивидуально,
                    с учетом всех пожеланий и исключительно вручную. Я уделяю огромное внимание качеству и очень трепетно подхожу к выбору материалов для производства.</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-4">
                <div class="card m-1" >
                    <img src="{{asset('images/w1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Кошель из шкуры с жопы дракона</p>
                        <p class="card-text">Цена: 3000р</p>
                        <p class="card-text">Производство занимает: 10 дней </p>
                        <a href="#" class="btn btn-primary">Заказать</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-1" >
                    <img src="{{asset('images/w1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Кошель из шкуры с жопы дракона</p>
                        <p class="card-text">Цена: 3000р</p>
                        <p class="card-text">Производство занимает: 10 дней </p>
                        <a href="#" class="btn btn-primary">Заказать</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-1" >
                    <img src="{{asset('images/w1.jpg')}}" class="card-img-top"  alt="...">
                    <div class="card-body">
                        <p class="card-text">Кошель из шкуры с жопы дракона</p>
                        <p class="card-text">Цена: 3000р</p>
                        <p class="card-text">Производство занимает: 10 дней </p>
                        <a href="#" class="btn btn-primary">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection