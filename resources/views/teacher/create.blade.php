@extends('layouts.default')
@section('content')
    <div>
        <h1>Додання до группи {{$group->name}}</h1>
        <form action="{{route('teacher.store')}}" method="post">
            @csrf
            <input type="hidden" name="group_id" value="{{$group->id}}">
            <h3>Повне ім'я</h3>
            <input type="text" name="full_name">
            <h4>Адреса</h4>
            <input type="text" name="address">
            <h5>Номер телефону</h5>
            <input type="text" name="phone_number">
            <button type="submit">Зберегти </button>
        </form>
    </div>
@endsection

