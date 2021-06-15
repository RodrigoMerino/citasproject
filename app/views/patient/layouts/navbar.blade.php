<nav class="navbar navbar-expand-lg navbar-light bg-light shadow" role="navigation ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Brand</a>
     
        @if (isAuthenticated())
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li>
                {{user()->email}}
                
            
                <a name="" id="" class="btn btn-outline-secondary" href="my-bookings" role="button">Mis citas</a>
                <a name="" id="" class="btn btn-outline-secondary" href="profile" role="button">Perfil</a>

                <a name="" id="" class="btn btn-outline-secondary" href="/logout" role="button">logout</a>
            </li>
        @else
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li>
                <a name="" id="" class="btn btn-outline-secondary" href="/register" role="button">Register</a>
                <a name="" id="" class="btn btn-outline-secondary" href="/login" role="button">Login</a>
                
            </li>
        @endif
         
            </ul>
        </div>
    </div>
</nav>