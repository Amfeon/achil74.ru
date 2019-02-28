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
                @foreach($data as $item)
                <a href="{{route('app.show',$item->id)}}" class="col-lg-5 mt-5" alt="{{$item->title}}">
                    <div class="card">
                        <div class="card_img">
                            <img src="/storage/{{$item->image}} ">
                            <div class="card_price">{{$item->title}}</div>
                        </div>
                        <div class="card_text">{!! $item->text !!}</div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection