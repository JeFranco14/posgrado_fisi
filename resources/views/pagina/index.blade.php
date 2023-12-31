@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/slider-1.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <!-- Contenido opcional -->
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/slider-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <!-- Contenido opcional -->
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-2 mb-3">
                <div class="col-lg-6 col-sm-6 wow fadeInUp border-end" data-wow-delay="0.1s">
                    <div class="service-item d-flex text-justify pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        </div>
                        <div class="p-3">
                            <h5 class="mb-3">Mayor Desarrollo Profesional</h5>
                            <p>La Unidad de Posgrado de la Facultad de Ingenieria de Sistemas e Informatica, brinda
                                programas de maestrías, licenciadas por Sunedu con Resolución N° N° 055-2019-SUNEDU/CD.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex text-justify pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-address-card text-primary mb-4"></i>
                        </div>
                        <div class="p-3">
                            <h5 class="mb-3">Docentes con experiencia</h5>
                            <p>Nuestra plana docente está conformada por destacados profesionales formados en
                                importantes universidades nacionales e internacionales.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-2 border-top">
                <div class="col-lg-6 col-sm-6 wow fadeInUp border-end" data-wow-delay="0.5s">
                    <div class="service-item d-flex text-justify pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                        </div>
                        <div class="p-3">
                            <h5 class="mb-3">Metodologia Hibrida</h5>
                            <p>Esta modalidad combina la presencia física y remota de los estudiantes en una misma sesión,
                                lo que les brinda una mayor flexibilidad para elegir la modalidad que mejor se adapte a sus
                                necesidades profesionales y personales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item d-flex text-justify pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-graduate text-primary mb-4"></i>
                        </div>
                        <div class="p-3">
                            <h5 class="mb-3">Perfil del Egresado</h5>
                            <p>Egresados con profundos conocimientos en Ciencia de la Computación, desarrollo de sistemas y
                                especializado en investigaciones de tecnología educativa en el campo de las Tecnologías de
                                la Información y Comunicación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/aboutfisi.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="font-weight: 200 !important">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Maestría</h6>
                    <h2 class="mb-4">Ventajas de estudiar una maestría para mejorar tu desarrollo profesional</h2>
                    <p class="mb-4">¿Te sientes estancado en el mismo espacio laboral, deseas mejorar tu desarrollo
                        profesional y adquirir nuevos conocimientos?</p>
                    <p class="mb-4">¡Debes conocer los beneficios de estudiar una maestría para cumplir con tus objetivos!
                        ¡Esta es una oportunidad para ti!</p>
                    <div class="row gy-2 gx-4 mb-4" style="font-weight: 400 !important; color: #1c1c1c;">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mejores Oportunidades
                                Laborales</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mayor Desarrollo
                                Profesional</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Calendarizacion Flexible
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Consolidacion Laboral</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Licenciada por SUNEDU</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate
                            </p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="contact.html">Contáctenos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Start Fun-facts
                <div id="fun-facts" class="fun-facts section overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-fun">
                                    <div class="content">
                                        <span class="counter"  data-count="1234">0</span>
                                        <p style="font-weight: 100">Alumnos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-fun">

                                    <div class="content">
                                        <span class="counter" data-count="1234">0</span>
                                        <p style="font-weight: 100">Egresados</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-fun">

                                    <div class="content">
                                        <span class="counter" data-count="1">0</span>
                                        <p style="font-weight: 100">Maestrias</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-fun">

                                    <div class="content">
                                        <span class="counter" data-count="5">0</span>
                                        <p style="font-weight: 100">Años de Servicios</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Especializaciones</h6>
                <h1 class="mb-5">Nuestras Maestrias</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="contact.html" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 30px 30px 30px 30px;">Informacion</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">Maestría en Ciencias con Mención en Tecnologías de Información.</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-laptop-code text-primary me-2"></i>Hibrida</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>3 semestres</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-book text-primary me-2"></i>51
                                creditos</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection
