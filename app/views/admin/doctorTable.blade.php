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
    <h2 class="mb-5">Lista de Doctores</h2>
    <div class=" container-fluid">

        <div class="row" id="loaded">

            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Doctores</h3>
                    </div>

                    <div class="table-responsive">

                        <table class="table align-items-center table-flush">
                            <thead class="">
                                <tr>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (@count($doctors))
                                    @foreach ($doctors as $item)
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        {{-- <img alt="Image placeholder"
src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg"> --}}
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td> {{ $item->email }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->phone_number }}</td>
                                            <td>
                                                <a href="#"> <i class="fa fa-edit" aria-hidden="true" data-toggle="modal"
                                                        data-target="#item-{{ $item->id }}"></i></a>


                                                <!-- Modal -->
                                                <div class="modal fade" id="item-{{ $item->id }}" data-backdrop="static"
                                                    data-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">

                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                                    {{ $item->name }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id='userForm'>

                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-12">
                                                                            <label for="name">Nombre Completo</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name" value="{{ $item->name }}"
                                                                                id="item-name-{{ $item->id }}">
                                                                            <input type="hidden" class="form-control"
                                                                                name="id" value="{{ $item->id }}"
                                                                                id="item-id-{{ $item->id }}">
                                                                        </div>

                                                                    </div>

                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <a href="#"><button type="submit" data-dismiss="modal"
                                                                        class="btn btn-primary update-category"
                                                                        id="{{ $item->id }}">Update</button></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <form class="d-inline"  action="delete/{{$item->id}}" method="post" >
                                                    <input type="hidden" class="form-control"
                                                    name="id" value="{{ $item->id }}">
                                                    <button type="submit" class="btn btn-link btn-xs"> <i class="fa fa-times" aria-hidden="true"></i></button>

                                                </form>

                                            </td>
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
