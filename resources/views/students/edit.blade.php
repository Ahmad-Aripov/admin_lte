<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('title')
    Изменение данных студента
@endsection
@section('content')

    <form action="{{route('student.update', $student)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Напишите имя:</label>
                <input type="text" name="name" class="form-control" value="{{$student->name}}" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Напишите фамилию:</label>
            <input class="form-control" type="text" value="{{$student->surname}}" name="surname">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите дату рождения:</label>
            <input class="form-control" type="text" value="{{$student->birthday}}" name="birthday">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите возраст:</label>
            <input class="form-control" type="text" value="{{$student->age}}" name="age">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите номер телефона:</label>
            <input class="form-control" type="text" value="{{$student->phone}}" name="phone">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите адрес:</label>
            <input class="form-control" type="text" value="{{$student->address}}" name="address">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите класс:</label>
            <input class="form-control" type="text" value="{{$student->grade}}" name="grade">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите литерал:</label>
            <input class="form-control" type="text" value="{{$student->literal}}" name="literal">
        </div>
        <button type="submit">Изменить</button>
    </form>
@endsection
</body>
</html>
