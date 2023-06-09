@extends('names.layout')
@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="container">
    <h5>Name: {{$name->username}}</h5>
    <h6>Age: {{$name->age}}</h6>
    <h6>Date of birth: {{$name->dob}}</h6>

    <a class="btn btn-warning btn-sm " href="{{ url('/names/'.$name->id. '/edit') }}">Edit Details</a>
    <form method='POST' class="form-group d-inline" action="{{ url('/names/'.$name->id) }}">
        {{method_field('Delete')}}
        {{ csrf_field() }}
        <button class="btn btn-danger btn-sm">Delete Patient</button>
    </form>

    <h5 class="mt-5">Previous Visits</h5>
    @if($services->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Service</th>
                    <th>Insurance</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $service->created_at }}</td>
                        <td>{{ $service->service }}</td>
                        <td>{{ $service->insurance }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No previous visits found.</p>
    @endif

</div>

@endsection