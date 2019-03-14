@extends('front-end.app')
@section('content')
    <section class="goods">
        <div class="container">
            <h3>{{ $data['title'] }}</h3>
            <div class="row">
                <div class="col-lg-7">
                    <img src="/storage/{{$data['src']}}" alt="{{$data['title']}}">
                </div>
                <div class="col-lg-5">
                    {!! $data['text'] !!}
                    <a class="card_botton" href="#">Заказать</a>
                </div>
            </div>
            <div class="row">
                <ul class="d-flex flex-wrap justify-content-between list-inline">
                    @foreach($images as $image)
                        <li><img  class="moreImg" src="/storage/{{$image->image}}" alt="" width="364" height="273"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>


    <div id="slider" class="modal-mask" >
        <div class="modal-wrapper">
            <div class="slider-container">
                <div id ="slider" class="blog-slider">
                    @foreach($images as $image)
                        <div class="blogSlides fade">
                            <img class="fadeImg" src="/storage/{{$image->image}}" alt="">
                        </div>
                    @endforeach
                    <a class="prev" id="prev">&#10094;</a>
                    <a class="next" id="next">&#10095;</a>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection