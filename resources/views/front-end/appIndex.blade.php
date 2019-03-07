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
                </div>
            </div>
            <div class="row">
                <ul class="d-flex flex-wrap justify-content-between list-inline">
                    @foreach($images as $image)
                        <li><img src="/storage/{{$image->image}}" alt="" width="364" height="273"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

@endsection