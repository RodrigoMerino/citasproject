@extends('doctor.layouts.base')
@section('content')
    
<style>
    .card-header {
        background-color: #C5B7F6;
    }

    .card-footer {
        background-color: white;
    }
</style>
<h2 class="mb-5">Lista de Doctores</h2>
<div class=" container-fluid">

    <div class="row" id="loaded">

        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Pacientes</h3>
                </div>

                <div class="table-responsive">

                    <table class="table align-items-center table-flush">
                        <thead class="">
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">Paciente</th>
                                <th scope="col">Email</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">doctor</th>
                                <th scope="col">Preescripciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (@count($prescriptions))
                            @foreach ($prescriptions as $prescription)
                            <tr>
                                <td></td>
                                <td>{{ $prescription->user}}</td>
                                <td>{{ $prescription->email}}</td>
                                <td>{{ $prescription->date }}</td>
                                <td>{{ $prescription->doctor }}</td>
<td> 
                                @if (!checkIfPrescriptionExists($prescription->user_id,$prescription->doctor_id))
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#item-{{$prescription->id}}">Escribir preescripción</button>
                                @else
<a href="/prescription/{{$prescription->user_id}}/{{$prescription->date}}" ><button  class="btn btn-secondary" type="button">Ver preescripción</button> </a>
                                @endif
                                </td>

                                <!-- Modal -->
                                <div class="modal fade" id="item-{{$prescription->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg shadow" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    {{$prescription->id_doctor}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/doctor/prescription-today" method="POST">
                                                    <input type="hidden" name="user_id" value="{{$prescription->id_user}}">
                                                    <input type="hidden" name="doctor_id"
                                                        value="{{$prescription->id_doctor}}">
                                                    <input type="hidden" name="date" value="{{$prescription->date}}">
                                                    <div class="form-group">
                                                        <label>Enfermedad</label>
                                                        <input class="form-control" type="text" name="disease">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sintomas</label>
                                                        <input class="form-control" type="text" name="symptoms">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Medicina</label>
                                                        <input class="form-control" type="text" name="medicine">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Uso de medicación</label>
                                                        <input class="form-control" type="text" name="usage_medication">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Feedback</label>
                                                        <input class="form-control" type="text" name="feedback">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Firma</label>
                                                        <input class="form-control" type="text" name="signature">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </tr>

                            @endforeach
                            @else
                            <h2 class=" d-flex justify-content-center mb-5">No existen doctores por el momento.</h2>
                            @endif


                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection