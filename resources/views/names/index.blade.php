@extends('names.layout')
@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="container">
    <div class="row">
        <h4>All Patients</h4>
        @if(count($names) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($names as $name)
                    <tr>
                        <td>{{ $name->username }}</td>
                        <td>{{ $name->age }}</td>
                        <td>{{ $name->dob }}</td>
                        <td>{{ $name->gender }}</td>
                        <td><a class="btn btn-info btn-sm" href="{{ url('/names/'. $name->id) }}">Details</a>
                        <a class="btn btn-warning btn-sm" href="{{ url('/names/'.$name->id. '/service') }}">Service</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            @else
                <p>Zero patients found.<span><a href="{{ url('/names/create') }}">Add a patient.</a></span> </p>
            @endif

    </div>
</div>


@endsection 