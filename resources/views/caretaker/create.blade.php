@extends('layouts.default')
@section('content')
    <div>
        <h1>Додавання опікуна</h1>
        <form action="{{route('caretaker.store')}}" method="post">
            @csrf
            <h1>Повне ім'я</h1>
            <input type="text" name="full_name">
            <h1>Адреса</h1>
            <input type="text" name="address">
            <h1>Номер телефону</h1>
            <input type="text" name="phone_number">
            <button type="submit">Зберегти </button>
        </form>
    </div>
@endsection

