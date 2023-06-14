@extends('layouts.default')
@section('content')
    <div>
        <h1>
            Назва Групи:{{$group->name}}
        </h1>
        <h3>Вихователі</h3>
        @foreach($teachers as $teacher)
            <div class="d-flex justify-content-between">
                <div class="mb-3 card col-md-10">
                    <div class="card-header">
                        <h1>{{$teacher->full_name}} </h1>
                    </div>
                </div>
            </div>
            <form action="{{route('teacher.destroy', $teacher->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger m-1">Видалити</button>
            </form>
            <a href="{{route('teacher.show', $teacher->id)}}" class="btn btn-dark">Деталі</a>
        @endforeach
        <a href="{{route('teacher.create',$group->id)}}" class="btn btn-success m-1">Додати вихователя</a>
        <h4>Діти</h4>
        @foreach($children as $child)
            <div class="d-flex justify-content-between">
                <div class="mb-3 card col-md-10">
                    <div class="card-header">
                        <h1>{{$child->full_name}} </h1>
                    </div>
                </div>
            </div>
            <a href="{{route('child.show', $child->id)}}" class="btn btn-dark">Деталі</a>
        @endforeach
        <a href="{{route('child.create',$group->id)}}" class="btn btn-success m-1">Додати дитину</a>
        <a href="{{route('group.index')}}" class="btn btn-secondary">Головна сторінка</a>
        <a href="{{route('group.edit', $group->id)}}" class="btn btn-warning mx-1">Редагувати</a>
    </div>
@endsection
