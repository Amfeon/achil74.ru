@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="col-lg-12">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" placeholder="Название" required>
                </div>
                <div class="form-group">
                    <label for="price">Цена услуги</label>
                    <input type="text" class="form-control" id="price" placeholder="Цена услуги" required>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Выбери картинку</label>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Описание услуги</label>
                    <textarea id="summernote" class="form-control" id="exampleFormControlTextarea1" rows="5" ></textarea>
                </div>
            </form>
        </div>
    </div>
@endsection