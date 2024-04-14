<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <style>
        .card-body, .form-group {
            padding: 0 !important;
            margin-bottom: 0 !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
@extends('layouts.app')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Напишите имя:</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Напишите фамилию:</label>
            <input class="form-control" type="text" name="surname">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите дату рождения:</label>
            <input class="form-control" type="text" name="birthday">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите возраст:</label>
            <input class="form-control" type="text" name="age">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите номер телефона:</label>
            <input class="form-control" type="text" name="phone">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите адрес:</label>
            <input class="form-control" type="text" name="address">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите класс:</label>
            <input class="form-control" type="text" name="grade">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Укажите литерал:</label>
            <input class="form-control" type="text" name="literal">
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection
</body>
</html>
