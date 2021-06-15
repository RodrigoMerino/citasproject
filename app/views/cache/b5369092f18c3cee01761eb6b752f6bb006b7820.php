<?php $__env->startSection('content'); ?>
    <form action="register" method="post">
        <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>REGISTRARSE</p>
                </div>

                <div class="form-content shadow rounded">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="nombre *" name="name"
                                    value="<?php echo e(App\Helpers\Request::returnData('post', 'name')); ?>" />

                                <span class="text-danger "><?php if (isset($data['error']['name'][0])) {
                                    echo $data['error']['name'][0];
                                    } else {
                                    echo '';
                                    } ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email *" name="email"
                                    value="<?php echo e(App\Helpers\Request::returnData('post', 'email')); ?>"" />

                                            <span class=" text-danger "><?php if (isset($data['error']['email'][0])) {
                                                echo $data['error']['email'][0];
                                            } else {
                                                echo '';
                                            } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class=" col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="contraseña *" name="password"
                                        value=" <?php echo e(App\Helpers\Request::returnData('post', 'password')); ?>" />

                                    <span class=" text-danger "><?php if
                                        (isset($data['error']['password'][0])) {
                                        echo $data['error']['password'][0];
                                        } else {
                                        echo '';
                                        } ?>
                                    </span>
                                </div>
                                <div class=" form-group">
                                    <input type="hidden" class="form-control" placeholder="Confirmar contraseña *"
                                        name="passwor111d" />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btnSubmit">Submit</button>
                    </div>
                </div>
            </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\app\Views/auth/register.blade.php ENDPATH**/ ?>