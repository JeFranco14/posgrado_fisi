@extends('layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid px-0 page-header" style="background-image: url({{ asset('img/maestria/1.png') }})">
        <div class="container-fluid py-5 m-0" style="background: rgba(0,0,0,0.3)">
            <div class="container py-5 px-0">
                <div class="col-lg-12 justify-content-start">
                    <div class="col-lg-8 text-start">
                        <h1 class="display-3 text-white animated slideInDown fw-bolder" style="line-height:1;">
                            Maestría en Ciencias con Mencion en Tecnologías de la Información</h1>
                        <p class="mt-4 text-white fw-light">INICIO / MAESTRIAS / <span class="text-dark">CURSO</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 d-flex" style="background: #fff">
        <div class="container d-flex">
            <div class="col-6 py-5 text-dark">
                <h1 class="text-dark">Presentación</h1>
                <p class="fw-light">La Escuela de Posgrado y la Unidad de Posgrado de la Facultad de Ingeniería de
                    Sistemas e Informática de
                    la Universidad Nacional de San Martín –Tarapoto, de acuerdo a su competencia y cumpliendo con sus
                    fines
                    y objetivos creados, desarrollará la Maestría en Ciencias con Mención en Tecnologías de Información.
                </p>
                <div class="container text-center mt-5">
                    <div class="row p-0">
                        <div class="col ps-0 pe-4 m-0 d-flex justify-content-start align-items-center">
                            <span style="border-radius: 50px; width: 60px; height: 60px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;"
                                class="bg-primary d-flex justify-content-center align-items-center">
                                <i class="fa fa-calendar text-white fs-5"></i>
                            </span>
                            <div class="d-flex flex-column text-start text-dark ms-4">
                                <span class="fs-6 mb-1 fw-light">Inicio</span>
                                <span class="fs-5 fw-bold" style="line-height:1;">1 de Marzo del 2024</span>
                            </div>
                        </div>
                        <div class="col ps-0 pe-4 m-0 d-flex justify-content-start align-items-center">
                            <span style="border-radius: 50px; width: 60px; height: 60px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;"
                                class="bg-primary d-flex justify-content-center align-items-center">
                                <i class="fa fa-book text-white fs-5"></i>
                            </span>
                            <div class="d-flex flex-column text-start text-dark ms-4">
                                <span class="fs-6 mb-1  fw-light">Créditos</span>
                                <span class="fs-5 fw-bold" style="line-height:1;">51 Creditos</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col ps-0 pe-4 m-0 d-flex justify-content-start align-items-center">
                            <span style="border-radius: 50px; width: 60px; height: 60px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;"
                                class="bg-primary d-flex justify-content-center align-items-center">
                                <i class="fa fa-clock text-white fs-5"></i>
                            </span>
                            <div class="d-flex flex-column text-start text-dark ms-4">
                                <span class="fs-6 mb-1  fw-light">Duración</span>
                                <span class="fs-5 fw-bold" style="line-height:1;">3 Semestres</span>
                            </div>
                        </div>
                        <div class="col ps-0 pe-4 m-0 d-flex justify-content-start align-items-center">
                            <span style="border-radius: 50px; width: 60px; height: 60px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;"
                                class="bg-primary d-flex justify-content-center align-items-center">
                                <i class="fa fa-money text-white fs-5"></i>
                            </span>
                            <div class="d-flex flex-column text-start text-dark ms-4">
                                <span class="fs-6 mb-1  fw-light">Inversion</span>
                                <span class="fs-5 fw-bold" style="line-height:1;">s/. 8,350</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="{{ asset('img/maestria/m1.jpg') }}" class="w-100">
            </div>
        </div>
    </div>
@endsection
