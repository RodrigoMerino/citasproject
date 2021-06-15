 
 <?php $__env->startSection('content'); ?>
 <div class="container-fluid container-md mt-5">

    <div class="row">
        <div class="col-md-6">
            image
        </div>
        <div class="col-md-6">
            <h2>CREAR CUENTA Y AGENDAR UN CITA</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi fuga libero autem delectus voluptas ad iure
            possimus eos soluta eveniet iusto vero non, error quos iste voluptate quas enim. Veniam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi fuga libero autem delectus voluptas ad iure
            possimus eos soluta eveniet iusto vero non, error quos iste voluptate quas enim. Veniam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi fuga libero autem delectus voluptas ad iure
            possimus eos soluta eveniet iusto vero non, error quos iste voluptate quas enim. Veniam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi fuga libero autem delectus voluptas ad iure
            possimus eos soluta eveniet iusto vero non, error quos iste voluptate quas enim. Veniam?
            <div class="mt-5">
                <button class="btn btn-success" type="button">Registrarse como paciente</button>
                <button class="btn btn-secondary" type="button">Login</button>

            </div>
        </div>
    </div>


    
    <div class="card shadow-sm p-3 mb-5 bg-white rounded mt-5">
        <div class="card-body">
            <h5 class="card-title">Buscar Doctores</h5>
            <div class="row">
                <div class="col-md-8">
                    <input class="form-control" type="date" name="date">
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary">Buscar Doctor</button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="card shadow mb-5">
        <div class="card-header border-0">
            <h5 class="mb-0">Doctores</h5>
        </div>
        <div class="table-responsive">

            <table class="table ">
                <thead class="">
                    <tr>
                        <th >Imagen</th>
                        <th >Nombre</th>
                        <th >Fecha</th>
                        <th >Email</th>

                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                       <td></td>

                       <td><?php echo e($doctor[2]); ?></td>
                       <td><?php echo e($doctor[1]); ?> </td>
                       <td><?php echo e($doctor[4]); ?> </td>
                       <td></td>
                       <td><a href="new-Appointment/<?php echo e($doctor[3]); ?>/<?php echo e($doctor[1]); ?>"> <button type="button" class="btn btn-success">Agendar Cita</button></a></td>
                   </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('home.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/home/home.blade.php ENDPATH**/ ?>