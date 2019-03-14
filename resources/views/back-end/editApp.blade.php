@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="col-lg-12" method="POST" action="{{route('store')}}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <input type="hidden" name ="id"  value="{{$data['id']}}">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Название" value="{{$data['title']}}" required>
                </div>
                <div class="form-group">
                    <label for="price">Цена услуги</label>
                    <input name="price" type="text" class="form-control" id="price" placeholder="Цена услуги" value="{{$data['price']}}" required>
                </div>
                <div class="form-group">
                    <label for="src">Картинка</label>
                    <input name="src" type="text" class="form-control" id="src" placeholder="Cсылка на картинку" value="{{$data['src']}}" required>
                </div>
                <div class="form-group">
                    <label for="cat_id">Категория</label>
                    <select name ="cat_id" class="form-control" id="exampleFormControlSelect{{$data['cat_id']}}">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" >{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="custom-file">
                    <input  name="picture[]" accept='image/jpeg' multiple='true' type="file" class="custom-file-input" id="picture">
                    <label class="custom-file-label" for="picture">Выбери картинки если хочешь добавить еще</label>
                </div>

                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Описание услуги</label>
                    <textarea name="text" id="summernote" class="form-control" id="exampleFormControlTextarea1" rows="5" >{!! $data['text'] !!}</textarea>
                </div>
                <button class="btn btn-info" type="submit">изменить</button>
            </form>
        </div>
        <div class="row mt-3">
            <form method="POST" action="{{route('application.image.delete')}}">
                {{ csrf_field() }}
                <ul class="image-list">
                    @foreach($images as $image)
                    <li class="image-list_item">
                        <input name="image_id[]" type="checkbox" value="{{$image->id}}">
                        <img src="/storage/{{$image->image}}">
                    </li>
                        @endforeach
                </ul>
                <input name="app_id" type="hidden" value="{{$data['id']}}">
                <input class="btn btn-danger" type="submit" value="удалить">
            </form>
        </div>
    </div>
@endsection