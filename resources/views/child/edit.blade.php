@extends('layouts.default')
@section('content')
    <div>
        <h1>Редагування інформації</h1>
        <form action="{{route('child.store')}}" method="post">
            @csrf
            <h1>Повне ім'я</h1>
            <input type="text" name="full_name" value="{{$child->full_name}}">
            <select name="group_id" class="form-select">
                @foreach($groups as $group)
                    <option {{$group->id==old('group_id')?'selected':''}} value="{{$group->id}}">{{$group->name}}</option>
                @endforeach
            </select>
            <button type="submit">Зберегти </button>
        </form>
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
                <a href="{{route('child.detach', [$child->id,$caretaker->id])}}" class="btn btn-danger mx-1">X</a>
            @endforeach
        <form action="{{route('child.attach')}}" method="get">
            <input type="hidden" name="child_id" value="{{$child->id}}" >
                <select name="caretaker_id" class="form-select">
                    @foreach($parents as $parent)
                        <option  value="{{$parent->id}}">{{$parent->full_name}}</option>
                        <a href="{{route('child.attach', [$child->id, $parent->id])}}" class="btn btn-success mx-1">+</a>
                    @endforeach
                </select>
            <button type="submit">Зберегти </button>
        </form>
    </div>
@endsection
