@extends('front-end.app')
@section('content')
    <section class="goods">
        <div class="container">
            <h3>Категория: {{$category['title']}} </h3>
            <div class="row mt-1">
                @foreach($data as $item)
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card_img">
                               <a href="{{route('app.index',['cat_id'=>$category['id'], 'id'=>$item->id])}}" title="{{$item->title}}"> <img src="/storage/{{$item->src}} "></a>
                                <div class="card_price">Цена: {{$item->price}} рублей</div>
                            </div>
                            <div class="card_text">{!! $item->text !!}</div>
                            <a class="card_botton">Заказать</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection