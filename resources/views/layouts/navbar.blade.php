<!-- Spinner Start -->

<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Cargando...</span>
    </div>
</div>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('inicio')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img class="logofisi" src="{{ asset('img/FISIlogopaginaweb.png')}}" alt="">
        <p class="m-0 text-primary d-flex flex-column">
            <span style="font-size: 22px; font-weight: 800; margin-bottom:-5px; padding:0px">UNIDAD DE POSGRADO</span>
            <span style="font-size: 10px; color: #9d9c9c">Facultad de Ingeniería de Sistemas e Informática</span>
        </p>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('inicio') }}" class="nav-item nav-link active">Inicio</a>
            <a href="{{ route('nosotros') }}" class="nav-item nav-link">Nosotros</a>
            <div class="nav-item dropdown">
                <a href="courses.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Maestrias</a>
                <div class="dropdown-menu fade-down m-0 p-0">
                    <a href="team.html" class="dropdown-item p-2 text-success">Ciencias en TI</a>
                    <a href="testimonial.html" class="dropdown-item p-2 text-success">Analisis de Datos</a>
                    <a href="404.html" class="dropdown-item p-2 text-success">Ciberseguridad</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Doctorados</a>
                <div class="dropdown-menu fade-down m-0 p-0">
                    <a href="team.html" class="dropdown-item p-2 text-success">Doctorados</a>
                    <a href="testimonial.html" class="dropdown-item p-2 text-success">Testimoni</a>
                    <a href="404.html" class="dropdown-item p-2 text-success">404 Page</a>
                </div>
            </div>
            <a href="{{ route('contactanos') }}" class="nav-item nav-link">Contactenos</a>
        </div>
        <a href="" class="btn btn-primary fw-bold py-4 px-lg-5 d-none d-lg-block"><i class="fa fa-university mr-3"></i>POSGRADO</a>
    </div>
</nav>
