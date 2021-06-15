<?php $__env->startSection('content'); ?>
    <div class="mt-5">
        <div class="row">
            <div class="col-md-3 ">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center">Doctor Informacion</h5>
                        <img src="" alt="">imagen
                        <p class="card-text">nombre: <?php echo e($doctor->name); ?></p>
                        <p class="card-text">departamento: <?php echo e($doctor->deparment); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <form action="/book-appointment" method="post">
                    <input type="hidden" name="doctor_id" value="<?php echo e($doctor_id); ?>">
                    <input type="hidden" name="date" value="<?php echo e($date); ?>">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($date); ?></h5>
                            <div class="row">
                                <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3">
                                        <label class="btn btn-outline-primary" type="button">
                                            <input type="radio" name="time" value="<?php echo e($item->time); ?>">
                                            <span><?php echo e($item->time); ?></span>
                                        </label>
                                    </div>
                                    <input type="hidden" name="appointment_id" value="<?php echo e($item->appointment_id); ?>">

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <?php if(isAuthenticated()): ?>
                        <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block mt-1">Agendar
                            Cita</button>

                    <?php else: ?>
                        <h3 class="text-center mt-5">Para agendar una cita debe estar registrado.</h3>
                    <?php endif; ?>

            </div>
            </form>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>


<style>
    label.btn {
        padding: 0;
    }

    label.btn input {
        opacity: 0;
        position: absolute;
    }

    label.btn span {
        text-align: center;
        padding: 6px 12px;
        display: block;
        min-width: 80px;
    }

    label.btn input:checked+span {
        background-color: rgb(80, 110, 228);
        color: white;
    }

</style>

<?php echo $__env->make('home.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\app\views/home/appointment.blade.php ENDPATH**/ ?>