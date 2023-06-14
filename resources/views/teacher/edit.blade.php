@extends('layouts.default')
@section('content')
    <div>
        <h1>Редагування інформації</h1>
        <form action="{{route('teacher.update',$teacher->id)}}" method="post">
            @csrf
            @method('patch')
            <h1>Повне ім'я</h1>
            <input type="text" name="full_name" value="{{$teacher->full_name}}">
            <h1>Адреса</h1>
            <input type="text" name="address" value="{{$teacher->address}}">
            <h1>Номер телефону</h1>
            <input type="text" name="phone_number" value="{{$teacher->phone_number}}">
            <h1>Группа</h1>
            <select name="group_id" class="form-select">
                @foreach($groups as $group)
                   <option {{$group->id==old('group_id')?'selected':''}} value="{{$group->id}}"> {{$group->name}} </option>
                @endforeach
            </select>
            <button type="submit">Зберегти </button>
        </form>
    </div>
@endsection

