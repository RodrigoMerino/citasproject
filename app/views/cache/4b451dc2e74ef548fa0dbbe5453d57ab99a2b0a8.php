<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" role="navigation ">
    <div class="container-fluid">
     
        <?php if(isAuthenticated()): ?>
                <a class="navbar-brand" href="#"><?php echo e(user()->email); ?></a>

        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li>
                
            <a name="" id="" class="btn btn-outline-secondary" href="/" role="button">Home</a>
                
            <a name="" id="" class="btn btn-outline-secondary" href="/my-bookings" role="button">Mis citas</a>
            <a name="" id="" class="btn btn-outline-secondary" href="/my-prescriptions" role="button">Mis Prescripciones</a>
                <a name="" id="" class="btn btn-outline-secondary" href="/profile" role="button">Perfil</a>

                <a name="" id="" class="btn btn-outline-secondary" href="/logout" role="button">logout</a>
            </li>
        <?php else: ?>
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li>
                <a name="" id="" class="btn btn-outline-secondary" href="/register" role="button">Register</a>
                <a name="" id="" class="btn btn-outline-secondary" href="/login" role="button">Login</a>
                
            </li>
        <?php endif; ?>
         
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\citasProject\app\views/home/layouts/navbar.blade.php ENDPATH**/ ?>