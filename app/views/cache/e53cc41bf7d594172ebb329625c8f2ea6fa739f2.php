 
 <?php $__env->startSection('content'); ?>
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
                     <?php if(@count($patients)): ?>
                     <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>

                         <td><?php echo e($patient->id_doctor); ?></td>
                         <td><?php echo e($patient->time); ?></td>
                         <td><?php echo e($patient->date); ?></td>
                         <td><?php echo e($patient->created_at); ?></td>
                         <?php if($patient->status == 0): ?>
                             <td> <button type="button" class="btn btn-primary">No visitado</button></td>

                         <?php else: ?>
                             <td> <button type="button" class="btn btn-warning"> visitado</button></td>

                         <?php endif; ?>
                     </tr>
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

<?php echo $__env->make('home.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/patient/home.blade.php ENDPATH**/ ?>