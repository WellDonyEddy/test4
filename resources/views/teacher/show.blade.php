@extends('layouts.default')
@section('content')
    <div>
        <h3>Вихователі</h3>
            <div class="d-flex justify-content-between">
                <div class="mb-3 col-md-10">
                        <h1>Повне ім'я{{$teacher->full_name}} </h1>
                        <h1>Адреса{{$teacher->address}} </h1>
                        <h1>Номер телефону{{$teacher->phone_number}} </h1>
                        <h1>Назва группи{{$group->name}} </h1>
                </div>
            </div>
            <form action="{{route('teacher.destroy', $teacher->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger m-1">Видалити</button>
            </form>
        <a href="{{route('group.index')}}" class="btn btn-secondary">Повернутися</a>
        <a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-warning mx-1">Редагувати</a>
    </div>
@endsection
