@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="col-lg-12" method="POST" action="{{route('store')}}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Название</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Название" required>
                </div>
                <div class="form-group">
                    <label for="price">Цена услуги</label>
                    <input name="price" type="text" class="form-control" id="price" placeholder="Цена услуги" required>
                </div>
                <div class="custom-file">
                    <input  name="image" accept='image/jpeg' multiple='true' type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Выбери картинку</label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Категория услуги</label>
                    <select name ="cat_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" >{{$category->title}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Описание услуги</label>
                    <textarea name="text" id="summernote" class="form-control" id="exampleFormControlTextarea1" rows="5" ></textarea>
                </div>
                <button class="btn btn-info" type="submit"> Создать</button>
            </form>
        </div>
    </div>
@endsection