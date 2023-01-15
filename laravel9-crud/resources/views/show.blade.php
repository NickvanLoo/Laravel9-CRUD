@extends('layouts.layout')
@section('content')
    <div class="card" style="margin: 20px;">
        <div class="card-header">Student gegevens</div>
        <div class="card-body">
            <h5 class="card-title">Naam: {{ $students->name }}</h5>
            <p class="card-text">Adres: {{ $students->address }}</p>
            <p class="card-text">Telefoonnummer: {{ $students->mobile }}</p>
        </div>
        <hr>
    </div>
@endsection
