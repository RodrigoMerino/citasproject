 @extends('home.layouts.base')
 @section('content')
     <div class="container-fluid container-md mt-5">

         <div class="card shadow-sm p-3 mb-5 bg-white rounded mt-5">
             <div class="card-body">
                 <h5 class="card-title">Tus citas</h5>
                 <div class="row">
                     <div class="table-responsive">

                         <table class="table ">
                             <thead class="">
                                 <tr>
                                     <th>Doctor</th>
                                     <th>Hora</th>
                                     <th>Fecha</th>
                                     <th>fecha de creación</th>
                                     <th>Estado</th>

                                 </tr>
                             </thead>

                             <tbody>
                     </div>
                     @if (@count($patients))
                     @foreach ($patients as $patient)
                     <tr>

                         <td>{{ $patient->id_doctor }}</td>
                         <td>{{ $patient->time }}</td>
                         <td>{{ $patient->date }}</td>
                         <td>{{ $patient->created_at }}</td>
                         @if ($patient->status == 0)
                             <td> <button type="button" class="btn btn-primary">No visitado</button></td>

                         @else
                             <td> <button type="button" class="btn btn-warning"> visitado</button></td>

                         @endif
                     </tr>
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
