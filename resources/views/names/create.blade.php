@extends('names.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="form-group" action='{{ url("names") }}' method='POST'>
                {!! csrf_field() !!}
                <label class='mt-2' for="title">Name</label>
                <input class='form-control' type="text" name='username'>

                <label class='mt-2' for="author">Age</label>
                <input class='form-control' type="text" name='age'>

                <label class='mt-2' for="gender">Gender</label>
                <select class='form-control' name='gender'>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <input class="d-none" name="hospitalnumber" value="<?php echo rand(1, 100); ?>">

                <label class='mt-2' for="dob">Date of Birth</label>
                <input class='form-control' type="date" name='dob' min="{{ date('Y-m-d') }}">

                <button class='btn btn-success btn-sm mt-2'>Save</button>
            </form>
        </div>
    </div>
</div>


@endsection