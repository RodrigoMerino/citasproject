@extends('doctor.layouts.base')
@section('content')
    {{-- <style>
    table td,th {
   text-align: center;   
} --}}
    </style>

    <h2 class="mb-5 p-5 mr-5">Horarios<i class="fas fa-user-clock  p-2 "></i></h2>
    <div class=" container-fluid">
        <form method="post" action="create">

            <input type="hidden" name="appointment_id">
            <div class="card mb-5">
                <div class="card-body">
                    <h5 class="card-title">Seleccionar fecha</h5>
                    <input class="form-control" type="date" name="date">

                </div>
            </div>
            <span class="text-danger "><?php if (isset($data['error']['date'][0])) {
                echo $data['error']['date'][0];
                } else {
                echo '';
                } ?>
            </span>
        </form>

        <div class="row">
            /**
            * @commet: crear pagination
            * @Date: 2021-06-01 11:11:33
            * @Desc:
            */

            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tu lista de citas: {{ count($appointments) }}</h3>
                    </div>

                    <div class="table-responsive">

                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>Doctor</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        {{-- change this to "$appointment->date"  map with object --}}
                                        <td>{{ $appointment[1] }}</td>

                                        <td>{{ $appointment[2] }}</td>

                                        <td>
                                            <form action="check-appointments" method="POST">
                                                <input type="hidden" name="date" value="{{ $appointment[2] }}">
                                                <button class="btn btn-primary" type="submit">Actuzalizar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">

                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

@endsection
