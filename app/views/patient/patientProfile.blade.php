@extends('home.layouts.base')
@section('content')

    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Perfil</h5>
                    <p class="card-text">nombre: {{ $user->name }}</p>
                    <p class="card-text">email: {{ $user->email }}</p>
                    <p class="card-text">Dirección: {{ $user->address }}</p>
                    <p class="card-text">Teléfono: {{ $user->phone_number }}</p>
                    <p class="card-text">Bio: {{ $user->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Actualizar Información</h5>
                    <form method="post" action="profile">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input id="address" class="form-control" type="text" name="address" {{$user->address}} value="{{$user->address}}">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone number</label>
                            <input id="phone" class="form-control" type="text" name="phone" {{$user->phone_number}} value="{{$user->phone_number}}"/>
                        </div>
                       
                        <div class="form-group">
                            <label for="description">Dirección</label>
                            <textarea id="description" class="form-control" name="description" rows="3">{{$user->description}}</textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Actulizar imagen</h5>
                    <p class="card-text">Content</p>
                </div>
            </div>
        </div>

    </div>

@endsection
