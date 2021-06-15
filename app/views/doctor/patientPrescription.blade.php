@extends('doctor.layouts.base')
@section('content')
<div class="container">
<div class="card shadow">
        <div class="card-body">
                <h5 class="card-title">Fecha:{{$date}}</h5>
                <hr>
                <p class="card-text">Paciente: {{$patients->user_id}}</p>
                <p class="card-text">Doctor: {{$patients->doctor_id}}</p>
                <p class="card-text">Enfermedad: {{$patients->desease}}</p>
                <p class="card-text">Sintomas: {{$patients->symptoms}}</p>
                <p class="card-text">Medicina: {{$patients->medicine}}</p>
                <p class="card-text">Indicaciones: {{$patients->procedure_medicine}}</p>
                <p class="card-text">Feedback: {{$patients->feedback}}</p>
                <p class="card-text">Firma: {{$patients->signature}}</p>
        </div>
</div>        
</div>

@endsection