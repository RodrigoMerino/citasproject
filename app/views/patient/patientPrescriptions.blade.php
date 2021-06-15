@extends('home.layouts.base')
@section('content')
<div class="container-fluid container-md mt-5">

    <div class="card shadow-sm p-3 mb-5 bg-white rounded mt-5">
        <div class="card-body">
            <h5 class="card-title">Tus Prescripciones medicas</h5>
            <div class="row">
                <div class="table-responsive">

                    <table class="table ">
                        <thead class="">
                            <tr>
                                <th>Fecha</th>
                                <th>Doctor</th>
                                <th>Enfermedad</th>
                                <th>Sintomas</th>
                                <th>Medicina</th>
                                <th>Método de uso</th>
                                <th>Feedback del doctor</th>
                            </tr>
                        </thead>

                        <tbody>
                </div>
                @if (@count($prescriptions))
                @foreach ($prescriptions as $prescription)
                <tr>

                    <td>{{ $prescription->date }}</td>
                    <td>{{ $prescription->doctor }}</td>
                    <td>{{ $prescription->desease }}</td>
                    <td>{{ $prescription->symptoms }}</td>
                    <td>{{ $prescription->medicine }}</td>
                    <td>{{ $prescription->procedure_medicine }}</td>
                    <td>{{ $prescription->feedback }}</td>

                    @endforeach

                    @else
                    <p class="text-center">no tienes citas</p>
                    @endif

                    </tbody>
                    </table>
            </div>
        </div>
    </div>

    @endsection