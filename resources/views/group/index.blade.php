@extends('layouts.default')
@section('content')
    <div class="container bg-dark">
        <a class="btn btn-primary"    href={{route('group.create')}}>Додати Групу</a>
        @foreach($groups as $group)
            <div class="d-flex justify-content-between">
            <div class="mb-3 card col-md-10">
                <div class="card-header">
                    <h1>{{$group->name}} </h1>
                </div>
            </div>
                <a href="{{route('group.show', $group->id)}}" class="btn btn-warning mx-1">Подивитися</a>
            <form action="{{route('group.destroy', $group->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger m-1">Видалити</button>
            </form>
            </div>
        @endforeach
    </div>
@endsection
