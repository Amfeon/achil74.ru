@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <a class="btn btn-primary btn-lg" style="color: #fff;" href="{{route('category.create')}}">Создать новую категорию</a>
        </div>
        <div class="row d-flex mt-4">
            @foreach($data as $item)
                <div class="card" style="width: 300px">
                    <img class="card-img-top" src="/storage/{{$item->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{!! $item->text !!}</p>
                        <a href="{{route('category.edit',$item->id)}}" class="card_botton btn btn-warning">Изменить</a>
                        <a href="{{route('category.delete',$item->id)}}" class="card_botton btn btn-danger">Удалить</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection