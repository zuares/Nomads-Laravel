<!-- Navigation Bar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white ">
        <a href="{{url('/')}}" class="navbar-brand">
            <img src="{{url('frontend/images/Logo.png')}}" alt="Logo Nomads">
        </a>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item mx-md-2 dropdown ">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Services</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Link 1</a>
                        <a href="#" class="dropdown-item">Link 2</a>
                        <a href="#" class="dropdown-item">Link 3</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonial</a>
                </li>
            </ul>
            @guest
            <!-- Mobile Button -->
            <form class="form-inline mx-md-2 d-md-block d-lg-none" type="button"
                onclick="event.preventDefault(); location.href='{{url('login')}}' ">
                <button class="btn btn-login  my-2 my-sm-0 px-4">Login</button>
            </form>
            <!-- Dekstop button -->
            <form class="form-inline my-2 my-lg-0 d-none d-lg-block" type="button"
                onclick="event.preventDefault(); location.href='{{url('login')}}' ">
                <button class="btn btn-login mx-md-2 btn-navbar-right my-2 my-sm-0 px-4">Login</button>
            </form>
            @endguest

            @auth
            <!-- Mobile Button -->
            <form method="POST" class="form-inline mx-md-2 d-md-block d-lg-none" action="{{url('logout')}}"
                type="submit">
                <button class="btn btn-login  my-2 my-sm-0 px-4">Logout</button>
                @csrf
            </form>
            <!-- Dekstop button -->
            <form method="POST" class="form-inline my-2 my-lg-0 d-none d-lg-block">
                @csrf
                <button class="btn btn-login mx-md-2 btn-navbar-right my-2 my-sm-0 px-4" action="{{url('logout')}}"
                    type="submit">Logout</button>
            </form>
            @endauth


        </div>
    </nav>
</div>
<!-- End Of Navigation Bar -->
