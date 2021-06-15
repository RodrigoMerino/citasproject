@extends('auth.layouts.base')
@section('content')
    <form action="/login" method="post">
        <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>LOGIN</p>
                </div>

                <div class="form-content shadow rounded">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="nombre *" name="name" />

                                <span class="text-danger "><?php if (isset($data['error']['name'][0])) {
                                    echo $data['error']['name'][0];
                                    } else {
                                    echo '';
                                    } ?>
                                </span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="contraseña *" name="password" />

                                <span class="text-danger "><?php if (isset($data['error']['password'][0])) {
                                    echo $data['error']['password'][0];
                                    } else {
                                    echo '';
                                    } ?>
                                </span>
                            </div>

                        </div>
                    </div>
                    <span>{{ Core\SessionHandler::existSession('error') }}</span>
                    <button type="submit" class="btnSubmit">Submit</button>
                </div>
            </div>
        </div>

    </form>
@endsection
