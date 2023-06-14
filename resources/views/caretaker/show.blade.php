@extends('layouts.default')
@section('content')
    <div>
        <h3>Інформація</h3>
        <div class="d-flex justify-content-between">
            <div class="mb-3 col-md-10">
                <h1>Повне ім'я{{$caretaker-> full_name}} </h1>
                <h1>Адреса{{$caretaker-> address}} </h1>
                <h1>Номер телефону{{$caretaker-> phone_number}} </h1>
            </div>
        </div>
        <a href="{{route('caretaker.list')}}" class="btn btn-secondary">Повернутися</a>
        <a href="{{route('caretaker.edit', $caretaker->id)}}" class="btn btn-warning mx-1">Редагувати</a>
    </div>
@endsection
