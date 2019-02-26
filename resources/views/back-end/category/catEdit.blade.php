@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="alert alert-info">Редактирование категории </h3>
        <div class="row">
            <div class="col-lg-5">

                <div class="row flex-column">
                    <label >Миниатюка категории</label>
                    <div class="row">
                        <div class="col-lg-3">
                            <img id="thumnailImage" src="/storage/{{$category['image']}}" width="200" height="150">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="file" name="thumnailEdit"  id="thumnailEdit" style="margin: 20px">
                </div>

            </div>
            <div class="col-lg-7">

                <form class="col-lg-12" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Название</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Название" value ="{{$category['title']}}" required>
                    </div>
                    <input type="hidden" name="id" value="{{$category['id']}}">
                    <input name="image" type="hidden" id="image"  value ="{{$category['image']}}" required>
                    <button class="btn btn-info mt-2" type="submit"> Создать</button>
                </form>

            </div>
        </div>





        <div class="row">

        </div>
    </div>
@endsection