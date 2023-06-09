@extends('names.layout')
@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="container">
    <form class="form-group" action='{{ url("names/".$name->id) }}' method='POST'>
        {!! csrf_field() !!}
        @method("PATCH")

        <label class='mt-2' for="username">Username</label>
        <input class='form-control' value="{{$name->username}}" type="text" name='username'>
    
        <label class='mt-2' for="age">Age</label>
        <input class='form-control' value="{{$name->age}}" type="number" name='age'>

        <label class='mt-2' for="gender">Gender</label>
        <select class='form-control' name='gender'>
            <option selected value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label class='mt-2' for="dob">Dob</label>
        <input class='form-control' value="{{$name->dob}}" type="date" name='dob'>
    
        <button class='btn btn-warning btn-sm mt-2'>update</button>
    </form>
</div>

@endsection