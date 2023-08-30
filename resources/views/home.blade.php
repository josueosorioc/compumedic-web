@extends('main')

@section('title', 'Inicio')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('content')
    <div class="home">

        {{-- SEC1 --}}
        <div class="container-fluid sec1">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start text-center mb-3">
                    <h1 class="text-white fw-bold desktop-item">
                        Soluciones de soporte técnico y reparación de computadoras
                    </h1>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/home/compumedic-banner-header-fig.png') }}" class="desktop-item" alt=""
                        class="w-100">
                    <img src="{{ asset('assets/images/home/compumedic-banner-header-fig.png') }}" class="mobile-item img-res w-100" alt="">
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
                    <br>
                    <a href="#contacto" class="btn-cta bg-red custom-margin-top">Conoce más</a>
                </div>
            </div>
            <div class="row gx-5 mt-5">
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
                    <br>
                    <a href="#contacto" class="btn-cta bg-red custom-margin-top-x">Conoce más</a>
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
                        class="w-100 desktop-item">
                        
                    <img src="{{ asset('assets/images/home/marcas-completo-res.jpg') }}" alt=""
                    class="w-100 mobile-item">
                </div>
            </div>
        </div>

        {{-- SEC6 --}}
        <div class="container-fluid sec6 d-pad">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="fw-bold text-white mb-3">Somos distribuidor autorizado de TeamViewer en México</h3>
                    <p class="text-white">
                        ¡Ofrecemos +150 marcas de licenciamiento de software original con factura fiscal en tu compra!
                    </p>
                    <a href="" class="btn-cta bg-red mt-3">Más información</a>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/home/compumedic-banner-teamviewer-img.png') }}" width="350" alt="">
                </div>
            </div>
        </div>

        {{-- SEC7 --}}
        <div class="container-fluid sec7 d-pad ">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fw-bold mb-5 text-center">Nuestras sucursales</h2>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="row">
                                <div class="col-md-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.7379249795968!2d-100.37708192383862!3d25.713099810610256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662965e5d60a923%3A0x619df126bc464f9d!2sCompuMedic%20Cumbres%20-%20Reparaci%C3%B3n%20de%20Computadoras!5e0!3m2!1ses!2smx!4v1693334027365!5m2!1ses!2smx" class="w-100" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col-md-6">
                                    <div class="barra"></div>
                                    <h3 class="text-center">
                                        Sucursal<br class="desktop-item">
                                        Cumbres
                                    </h3>
                                    <p class="c-width">
                                        Calle Gran Parque 442, col. Cumbres Sector 2, Monterrey, Nuevo León, México.
                                    </p>
                                    <br>
                                    <p class="fw-bold">
                                        TEL. 8183000544
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.971711531257!2d-100.46115332383742!3d25.771497908198896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629bc5b4ee37b5%3A0x4a33b50cf4400d71!2sCompuMedic%20Dominio%20-%20Reparaci%C3%B3n%20de%20Computadoras!5e0!3m2!1ses!2smx!4v1693334046677!5m2!1ses!2smx" class="w-100" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col-md-6">
                                    <div class="barra"></div>
                                    <h3 class="text-center">
                                        Sucursal<br class="desktop-item">
                                        Dominio
                                    </h3>
    
                                    <p class="c-width">
                                        Prol. Ruiz Cortínez 2600 Local 21, col. Cumbres La Rioja, García, Nuevo León, México.
                                    </p>
                                    <br class="mobile-item">
                                    <p class="fw-bold">TEL. 8133483000</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        {{-- SEC8 --}}
        <div class="container sec8 d-pad ">
            <div class="row text-center">
                    <h2 class="fw-bold mb-5">Nuestros clientes</h2>
                    <div class="desktop-item">
                        <div id="carousel-bullet" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-1.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-2.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-3.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-4.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-5.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-6.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-7.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-8.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-9.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-10.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-11.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-12.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-13.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-14.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-15.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-16.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-17.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('assets/images/Logos/Logo-18.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-bullet" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-bullet" data-bs-slide="next">
                                <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-item">
                        <div id="carousel-bullet" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="4" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="5" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carousel-bullet" data-bs-slide-to="6" aria-label="Slide 6"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-1.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-2.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-3.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-4.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-5.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-6.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-7.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-8.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-9.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-10.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-11.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-12.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-13.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-14.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-15.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-16.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-17.webp')}}" class="w-100" alt="">
                                        </div>
                                        <div class="col-md-4 col">
                                            <img src="{{ asset('assets/images/Logos/Logo-18.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-bullet" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-bullet" data-bs-slide="next">
                                <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
            </div>
        </div>

        {{-- SEC9 FORM --}}
        <div class="container-fluid sec9 d-pad ">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="fw-bold text-white mb-4">
                        Contáctanos
                    </h2>
                    <p class="text-white ">
                        ¿Tienes alguna pregunta? Estamos aquí para ayudar.  Envíanos un mensaje y nos pondremos en contacto.
                    </p>

                    <div class="formulario mt-5">
                        <form>

                            <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre:">
                            <input type="number" name="telefono" class="form-control mb-2" placeholder="Telefono:">
                            <input type="text" name="email" class="form-control mb-2" placeholder="Email:">
                            <textarea class="form-control mb-4" name="mensaje" rows="3" placeholder="Mensaje:"></textarea>

                            <button type="submit" class="btn-cta bg-red w-100">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>
@endsection