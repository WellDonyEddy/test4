@extends('layouts.default')
@section('content')
    <div>
        <h1>Додання до группи {{$group->name}}</h1>
        <form action="{{route('child.store')}}" method="post">
            @csrf
            <input type="hidden" name="group_id" value="{{$group->id}}">
            <h3>Повне ім'я</h3>
            <input type="text" name="full_name">
            <button type="submit">Зберегти </button>
        </form>
    </div>
@endsection

