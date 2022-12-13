@extends('layouts.layout')
@section('content')
<div class="card" style="margin: 20px;">
    <div class="card-header">Creëer nieuwe student</div>
        <div class="card-body">
            <form action="{{ url('student') }}" method="post">
                {!! csrf_field() !!}
                <label>Naam:</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label>Adres:</label><br>
                <input type="text" name="address" id="address" class="form-control"><br>
                <label>Telefoonnummer:</label><br>
                <input type="text" name="mobile" id="mobile" class="form-control"><br>
                <input type="submit" value="Opslaan" class="btn btn-success"><br>
            </form>
        </div>
</div>
@stop