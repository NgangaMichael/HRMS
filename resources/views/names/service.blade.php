@extends('names.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h4>Add service</h4>
            <form class="form-group" action='{{ url("saveservice") }}' method='POST'>
                {!! csrf_field() !!}

                <label class='mt-2' for="gender">Service</label>
                <select class='form-control' name='service'>
                    <option value="inpatient">In Patient</option>
                    <option value="outpatient">Out Patient</option>
                </select>

                <label class='mt-2' for="title">Insurance</label>
                <select class='form-control' name='insurance'>
                    <option value="apa">APA</option>
                    <option value="britam">Britam</option>
                    <option value="nhif">NHIF</option>
                    <option value="cash">Cash</option>
                </select>
                
                <input class='form-control d-none' value="{{$name->hospitalnumber}}" name='hospitalnumber'>
                <input class='form-control d-none' value="{{$name->id}}" name='iddd'>

                <button class='btn btn-success btn-sm mt-2'>Save</button>
            </form>
        </div>
    </div>
</div>


@endsection