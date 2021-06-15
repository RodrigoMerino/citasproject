<?php $__env->startSection('content'); ?>
<div class="container">
<div class="card shadow">
        <div class="card-body">
                <h5 class="card-title">Fecha:<?php echo e($date); ?></h5>
                <hr>
                <p class="card-text">Paciente: <?php echo e($patients->user_id); ?></p>
                <p class="card-text">Doctor: <?php echo e($patients->doctor_id); ?></p>
                <p class="card-text">Enfermedad: <?php echo e($patients->desease); ?></p>
                <p class="card-text">Sintomas: <?php echo e($patients->symptoms); ?></p>
                <p class="card-text">Medicina: <?php echo e($patients->medicine); ?></p>
                <p class="card-text">Indicaciones: <?php echo e($patients->procedure_medicine); ?></p>
                <p class="card-text">Feedback: <?php echo e($patients->feedback); ?></p>
                <p class="card-text">Firma: <?php echo e($patients->signature); ?></p>
        </div>
</div>        
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('doctor.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/doctor/patientPrescription.blade.php ENDPATH**/ ?>