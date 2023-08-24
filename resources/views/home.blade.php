@extends('main')

@section('title', 'Inicio')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
    <div class="home">

        {{-- SEC1 --}}
        <div class="container-fluid sec1 d-pad">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start text-center mb-3">
                    <h1 class="text-white fw-bold">
                        Soluciones de soporte técnico y reparación de computadoras
                    </h1>
                </div>
                <div class="col-md-6 text-center">
                    {{-- <img src="{{ asset('assets/images/home/compumedic-banner-header-fig.png') }}" alt=""
                        class="w-100"> --}}
                </div>
            </div>
        </div>

        {{-- SEC2 --}}
        <div class="container-fluid sec2 d-pad text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fw-bold mb-4">Deja tu equipo en las mejores manos</h2>
                    <p>
                        En CompuMedic ofrecemos productos y servicios
                        para la reparación de computadoras que se adaptan
                        a las<br> necesidades de nuestros clientes, ya sean
                        personas físicas o negocios en expansión.
                    </p>
                    <p>
                        Nuestra tecnología, herramientas técnicas y conocimientos
                        de ingeniería avanzada nos permiten brindarles<br> soluciones
                        de calidad para convertirnos en:
                        <strong>"El médico de cabecera para su computadora"</strong>.
                    </p>
                </div>
            </div>
        </div>

        {{-- SEC3 --}}
        <div class="container-fluid sec3 d-pad-m text-white">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h3 class="fw-bold">Más de 18 años de experiencia en el mercado de<br> equipos de cómputo</h3>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('assets/images/home/compumedic-garantia-cta.png') }}" alt=""
                        class="icon-years">
                </div>
            </div>
        </div>

        {{-- SEC4 --}}
        <div class="container-fluid sec4 d-pad ">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="fw-bold mb-5">
                        Ofrecemos el servicio que tu<br> computadora necesita:
                    </h2>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/home/compumedic-servicios-reparacion.png') }}" alt=""
                        class="w-100 mb-3">

                    <div class="d-flex mb-3 mt-4">
                        <div class="quote bg-red me-4"></div>
                        <h3 class="mb-0">Reparación de computadoras</h3>
                    </div>
                    <div class="info-box">
                        <p>
                            &bullet; Servicio para clientes en Monterrey y su área metropolitana.
                        </p>
                        <p>
                            &bullet; Reparación de computadoras con sistema operativo Windows, equipos iMac, MacBook y muchas
                            marcas más.
                        </p>
                        <p>
                            &bullet; Servicio a nivel componente que reduce el costo de nuestro servicio.
                        </p>
                    </div>
                    <a href="#contacto" class="btn-cta bg-red mt-4">Conoce más</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/home/compumedic-servicios-soporte.png') }}" alt=""
                        class="w-100 mb-3">

                    <div class="d-flex mb-3 mt-4">
                        <div class="quote bg-red me-4"></div>
                        <h3 class="mb-0">Soporte técnico empresarial</h3>
                    </div>
                    <div class="info-box">
                        <p>&bullet; Servicio orientado a PyMES y corporativos.</p>
                        <p>&bullet; Alta calidad en servicio.</p>
                        <p>&bullet; Soluciones que mantienen tu compañía en constante funcionamiento.</p>
                    </div>
                    <a href="#contacto" class="btn-cta bg-red mt-4">Conoce más</a>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/home/compumedic-servicios-venta.png') }}" alt=""
                        class="w-100 mb-3">

                    <div class="d-flex mb-3 mt-4">
                        <div class="quote bg-red me-4"></div>
                        <h3 class="mb-0">Venta de computadoras</h3>
                    </div>
                    <div class="info-box">
                        <p>
                            &bullet; Distribuidores autorizados de HP, Lenovo, Dell, Epson, Apple y Samsung y más.
                        </p>
                        <p>
                            &bullet; Venta de laptops, computadoras, impresoras y equipos para "gamers".
                        </p>
                        <p>
                            &bullet; Ofrecemos garantía de fábrica, ¡y precios bajos!
                        </p>
                    </div>
                    <a href="#contacto" class="btn-cta bg-red mt-4">Conoce más</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/home/compumedic-servicios-software.png') }}" alt=""
                        class="w-100 mb-3">

                    <div class="d-flex mb-3 mt-4">
                        <div class="quote bg-red me-4"></div>
                        <h3 class="mb-0">Cotiza tu software</h3>
                    </div>
                    <div class="info-box">
                        <p>&bullet; Distribuidores autorizados de +150 marcas de licenciamiento de software original en México.</p>
                        <p>&bullet; Ofrecemos sistemas antivirus, software de acceso y control remoto, programas de servicios creativos, entre otros.</p>
                    </div>
                    <a href="#contacto" class="btn-cta bg-red mt-4">Conoce más</a>
                </div>
            </div>
        </div>

        {{-- SEC5 --}}
        <div class="container-fluid sec5 d-pad text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fw-bold mb-5">
                        Manejamos las mejores marcas de<br> equipos tecnológicos:
                    </h2>
                    <img src="{{ asset('assets/images/home/marcas-completo.jpg') }}" alt=""
                        class="w-100">
                </div>
            </div>
        </div>

        {{-- SEC6 --}}
        <div class="container-fluid sec6 d-pad">
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>

        {{-- SEC7 --}}
        <div class="container-fluid sec7 d-pad ">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="fw-bold mb-5">Nuestras sucursales</h2>
                </div>
            </div>
        </div>

        {{-- SEC8 --}}
        <div class="container-fluid sec8 d-pad ">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="fw-bold mb-5">Nuestros clientes</h2>
                </div>
            </div>
        </div>

        {{-- SEC9 FORM --}}
        <div class="container-fluid sec9 d-pad ">
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>
@endsection
