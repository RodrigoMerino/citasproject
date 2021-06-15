<?php $__env->startSection('content'); ?>
    
<style>
    .card-header {
        background-color: #C5B7F6;
    }

    .card-footer {
        background-color: white;
    }
</style>
<h2 class="mb-5">Lista de Doctores</h2>
<div class=" container-fluid">

    <div class="row" id="loaded">

        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Pacientes</h3>
                </div>

                <div class="table-responsive">

                    <table class="table align-items-center table-flush">
                        <thead class="">
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">Paciente</th>
                                <th scope="col">Email</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">doctor</th>
                                <th scope="col">Preescripciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if(@count($prescriptions)): ?>
                            <?php $__currentLoopData = $prescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td></td>
                                <td><?php echo e($prescription->user); ?></td>
                                <td><?php echo e($prescription->email); ?></td>
                                <td><?php echo e($prescription->date); ?></td>
                                <td><?php echo e($prescription->doctor); ?></td>
<td> 
                                <?php if(!checkIfPrescriptionExists($prescription->user_id,$prescription->doctor_id)): ?>
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#item-<?php echo e($prescription->id); ?>">Escribir preescripción</button>
                                <?php else: ?>
<a href="/prescription/<?php echo e($prescription->user_id); ?>/<?php echo e($prescription->date); ?>" ><button  class="btn btn-secondary" type="button">Ver preescripción</button> </a>
                                <?php endif; ?>
                                </td>

                                <!-- Modal -->
                                <div class="modal fade" id="item-<?php echo e($prescription->id); ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg shadow" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    <?php echo e($prescription->id_doctor); ?></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/doctor/prescription-today" method="POST">
                                                    <input type="hidden" name="user_id" value="<?php echo e($prescription->id_user); ?>">
                                                    <input type="hidden" name="doctor_id"
                                                        value="<?php echo e($prescription->id_doctor); ?>">
                                                    <input type="hidden" name="date" value="<?php echo e($prescription->date); ?>">
                                                    <div class="form-group">
                                                        <label>Enfermedad</label>
                                                        <input class="form-control" type="text" name="disease">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sintomas</label>
                                                        <input class="form-control" type="text" name="symptoms">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Medicina</label>
                                                        <input class="form-control" type="text" name="medicine">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Uso de medicación</label>
                                                        <input class="form-control" type="text" name="usage_medication">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Feedback</label>
                                                        <input class="form-control" type="text" name="feedback">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Firma</label>
                                                        <input class="form-control" type="text" name="signature">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <h2 class=" d-flex justify-content-center mb-5">No existen doctores por el momento.</h2>
                            <?php endif; ?>


                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('doctor.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\citasProject\App\Views/doctor/prescriptions.blade.php ENDPATH**/ ?>