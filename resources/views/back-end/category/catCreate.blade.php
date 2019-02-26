@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="col-lg-12" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Название</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Название" required>
                </div>

                <div class="custom-file">
                    <label for="image">Миниатюра</label>
                    <input  name="image" accept='image/jpeg' multiple='true' type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile" >Выбери картинку</label>
                </div>
                <button class="btn btn-info mt-2" type="submit"> Создать</button>
            </form>
        </div>
    </div>
@endsection