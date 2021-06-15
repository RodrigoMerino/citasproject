@extends('includes.base')
@section('content')
    <style>
        .card-header {
            background-color: #C5B7F6;
        }

        .card-footer {
            background-color: white;
        }

    </style>
    <h2 class="mb-5">Lista de pacientes con cita</h2>
    <div class=" container-fluid">
{{date('Y-m-d')}}
        <div class="row" id="loaded">

            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Pacientes({{@count($bookings)}})</h3>
                    </div>

                    <div class="table-responsive">

                        <table class="table align-items-center table-flush">
                            <thead class="">
                                <tr>
                                    <th scope="col">photto</th>
                                    <th scope="col">Paciente</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (@count($bookings))
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td></td>
                                           
                                            <td>{{ $booking->user }}</td>
                                            <td>{{ $booking->email }}</td>
                                            <td> {{ $booking->time }}</td>
                                            <td>{{ $booking->date }}</td>
                                            <td>{{ $booking->doctor }}</td>
                                                @if ($booking->status == 0)
                                                <td> <a href="status/update/{{$booking->id}}"> <button type="button" class="btn btn-primary">No visitado</button></a></td>
                   
                                            @else
                                            <td> <a href="status/update/{{$booking->id}}"> <button type="button" class="btn btn-warning"> visitado</button></a></td>
                   
                                            @endif
                                        </tr>

                                    @endforeach
                                @else
                                    <h2 class=" d-flex justify-content-center mb-5">No existen pacientes por el momento.</h2>
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