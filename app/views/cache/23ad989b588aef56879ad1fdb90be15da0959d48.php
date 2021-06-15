<?php $__env->startSection('content'); ?>
    <div class="col d-flex justify-content-center mt-5 ">

        <div class="card text-center shadow rounded" style="width: 70%;">
            <div class="card-header bg-primary" style="color:white;">
                Registrar
            </div>
            <div class="card-body ">
                <form method="post" action="register">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nombre Completo</label>
                            <input type="text" class="form-control" name="name"
                                value="<?php echo e(App\Helpers\Request::returnData('post', 'name')); ?>">
                            <span class="text-danger "><?php if (isset($val['error']['name'][0])) {
                                echo $val['error']['name'][0];
                                } else {
                                echo '';
                                } ?>
                            </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email"
                                value="<?php echo e(App\Helpers\Request::returnData('post', 'email')); ?>">
                            <span class="text-danger "><?php if (isset($val['error']['email'][0])) {
                                echo $val['error']['email'][0];
                                } else {
                                echo '';
                                } ?>
                            </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password"
                                value="<?php echo e(App\Helpers\Request::returnData('post', 'password')); ?>">

                            <span class="text-danger "><?php if (isset($val['error']['password'][0])) {
                                echo $val['error']['password'][0];
                                } else {
                                echo '';
                                } ?>
                            </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Educación</label>
                            <input type="education" class="form-control" name="education"
                                value="<?php echo e(App\Helpers\Request::returnData('post', 'education')); ?>">
                            <span class="text-danger "><?php if (isset($val['error']['education'][0])) {
                                echo $val['error']['education'][0];
                                } else {
                                echo '';
                                } ?>
                            </span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Address">Dirección</label>
                        <input type="text" class="form-control" placeholder="Apartment, studio, or floor" name="address"
                            value="<?php echo e(App\Helpers\Request::returnData('post', 'address')); ?>">


                        <span class="text-danger "><?php if (isset($val['error']['address'][0])) {
                            echo $val['error']['address'][0];
                            } else {
                            echo '';
                            } ?>
                        </span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="specialist">Departamento</label>
                            <input type="text" class="form-control" name="department"
                                value="<?php echo e(App\Helpers\Request::returnData('post', 'department')); ?>">

                            <span class="text-danger "><?php if (isset($val['error']['department'][0])) {
                                echo $val['error']['department'][0];
                                } else {
                                echo '';
                                } ?>
                            </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Numero de Telefono</label>
                            <input type="text" class="form-control" name="phone"
                                value="<?php echo e(App\Helpers\Request::returnData('post', 'phone')); ?>">

                            <span class="text-danger "><?php if (isset($val['error']['phone'][0])) {
                                echo $val['error']['phone'][0];
                                } else {
                                echo '';
                                } ?>
                            </span>
                        </div>
                    </div>
                    <select class="form-control" name="role_id" required>

                        <option class="text-center" value="" selected disabled hidden>--Seleccione el rol del usuario--
                        </option>


                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                    <div class="form-group">

                    </div>
                    <button type="submit" class="btn btn-primary border-bottom btn-grad">Crear</button>
                </form>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('includes.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/admin/doctorRegister.blade.php ENDPATH**/ ?>