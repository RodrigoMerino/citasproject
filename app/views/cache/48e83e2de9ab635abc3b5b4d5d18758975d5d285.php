<?php $__env->startSection('content'); ?>
<div class="container-fluid container-md mt-5">

    <div class="card shadow-sm p-3 mb-5 bg-white rounded mt-5">
        <div class="card-body">
            <h5 class="card-title">Tus Prescripciones medicas</h5>
            <div class="row">
                <div class="table-responsive">

                    <table class="table ">
                        <thead class="">
                            <tr>
                                <th>Fecha</th>
                                <th>Doctor</th>
                                <th>Enfermedad</th>
                                <th>Sintomas</th>
                                <th>Medicina</th>
                                <th>Método de uso</th>
                                <th>Feedback del doctor</th>
                            </tr>
                        </thead>

                        <tbody>
                </div>
                <?php if(@count($prescriptions)): ?>
                <?php $__currentLoopData = $prescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($prescription->date); ?></td>
                    <td><?php echo e($prescription->doctor); ?></td>
                    <td><?php echo e($prescription->desease); ?></td>
                    <td><?php echo e($prescription->symptoms); ?></td>
                    <td><?php echo e($prescription->medicine); ?></td>
                    <td><?php echo e($prescription->procedure_medicine); ?></td>
                    <td><?php echo e($prescription->feedback); ?></td>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php else: ?>
                    <p class="text-center">no tienes citas</p>
                    <?php endif; ?>

                    </tbody>
                    </table>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/patient/patientPrescriptions.blade.php ENDPATH**/ ?>