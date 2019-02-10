@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <div class="item text-center">
                      <h3 class="item__title ">Заявки</h3>
                      <a href="{{route('tasks')}}" class="btn btn-success">Просмотреть заяки</a>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="item text-center">
                  <h3 class="item__title ">Услуги</h3>
                  <a href="{{route('application')}}" class="btn btn-success">Редактировать услуги</a>
              </div>
          </div>
      </div>
    </div>
@endsection