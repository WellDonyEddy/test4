@extends('layouts.default')
@section('content')
    <div>
        <h1>Редагування інформації</h1>
        <form action="{{route('caretaker.update',$caretaker->id)}}" method="post">
            @csrf
            @method('patch')
            <h1>Повне ім'я</h1>
            <input type="text" name="full_name" value="{{$caretaker->full_name}}">
            <h1>Адреса</h1>
            <input type="text" name="address" value="{{$caretaker->address}}">
            <h1>Номер телефону</h1>
            <input type="text" name="phone_number" value="{{$caretaker->phone_number}}">
            <button type="submit">Зберегти </button>
        </form>
    </div>
@endsection

