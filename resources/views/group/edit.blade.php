@extends('layouts.default')
@section('content')
    <div>
        <form action="{{route('group.update', $group->id)}} "method="post">
            @csrf
            @method('patch')
            <h3>Назва Групи</h3>
            <input type="text" name="name" value="{{$group->name}}">
            <button type="submit">Зберегти </button>
        </form>
        <a href="{{ URL::previous() }}" class="btn btn-secondary mx-1">Головна Сторінка</a>
    </div>
