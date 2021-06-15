<?php $__env->startSection('content'); ?>

    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Perfil</h5>
                    <p class="card-text">nombre: <?php echo e($user->name); ?></p>
                    <p class="card-text">email: <?php echo e($user->email); ?></p>
                    <p class="card-text">Dirección: <?php echo e($user->address); ?></p>
                    <p class="card-text">Teléfono: <?php echo e($user->phone_number); ?></p>
                    <p class="card-text">Bio: <?php echo e($user->description); ?></p>
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
                            <input id="name" class="form-control" type="text" name="name" value="<?php echo e($user->name); ?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input id="address" class="form-control" type="text" name="address" <?php echo e($user->address); ?> value="<?php echo e($user->address); ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone number</label>
                            <input id="phone" class="form-control" type="text" name="phone" <?php echo e($user->phone_number); ?> value="<?php echo e($user->phone_number); ?>"/>
                        </div>
                       
                        <div class="form-group">
                            <label for="description">Dirección</label>
                            <textarea id="description" class="form-control" name="description" rows="3"><?php echo e($user->description); ?></textarea>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/patient/patientProfile.blade.php ENDPATH**/ ?>