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
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Дата рождения</th>
            <th>Возраст</th>
            <th>Номер</th>
            <th>Адрес</th>
            <th>Класс</th>
            <th>Литерал</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->birthday}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->grade}}</td>
                <td>{{$student->literal}}</td>
                <td>
                    <form action="{{route('student.destroy', $student->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('student.edit', $student->id)}}" method="GET">
                        @csrf
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
</body>
</html>
