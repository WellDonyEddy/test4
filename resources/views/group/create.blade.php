@extends('layouts.default')
@section('content')
    <div>
        <form action="{{route('group.store')}}" method="post">
            @csrf
            <h3>Назва Групи</h3>
            <input type="text" name="name">
            <button type="submit">Зберегти </button>
        </form>
    </div>
