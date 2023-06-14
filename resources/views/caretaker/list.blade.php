@extends('layouts.default')
@section('content')
    <div class="container bg-dark">
        <a class="btn btn-primary"    href={{route('caretaker.create')}}>Додати опікуна</a>
        @foreach($caretakers as $caretaker)
            <div class="d-flex justify-content-between">
                <div class="mb-3 card col-md-10">
                    <div class="card-header">
                        <h1>{{$caretaker->full_name}} </h1>
                    </div>
                </div>
                <a href="{{route('caretaker.show', $caretaker->id)}}" class="btn btn-warning mx-1">Деталі</a>
                <form action="{{route('caretaker.destroy', $caretaker->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger m-1">Видалити</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
