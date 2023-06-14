@extends('layouts.default')
@section('content')
<div>
    <h3>Дитина</h3>
    <div>
        <h1>Повне ім'я: {{$child->full_name}} </h1>
        <h1>Назва группи: {{$group->name}} </h1>
    </div>
    @foreach($caretakers as $caretaker)
        <div class="d-flex justify-content-between">
            <div class="mb-3 card col-md-10">
                <div class="card-header">
                    <h1>Ім'я опікуна: {{$caretaker->full_name}} </h1>
                    <h1>Адреса: {{$caretaker->address}}</h1>
                </div>
            </div>
        </div>
        <a href="{{route('caretaker.show', $caretaker->id)}}" class="btn btn-success mx-1">Інформація</a>
    @endforeach
    <form action="{{route('child.destroy', $child->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger m-1">Видалити</button>
    </form>
    <a href="{{ URL::previous() }}" class="btn btn-secondary mx-1">Повернутися</a>
    <a href="{{route('child.edit', $child->id)}}" class="btn btn-warning mx-1">Редагувати</a>
</div>
@endsection

