@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
        <tr @if(!$task->writen) style="font-weight: bold" @endif>
            <td>{{$task->name}}</td>
            <td>{{$task->phone}}</td>
            <td><a href="/admin/task/delete/{{$task->id}}">delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection