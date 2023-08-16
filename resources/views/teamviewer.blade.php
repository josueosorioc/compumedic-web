@extends('main')

@section('title', 'Teamviewer')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/teamviewer.css') }}">
@endsection

@section('content')
    <div class="teamviewer">

        {{-- SEC1 --}}
        <div class="container-fluid sec1 d-pad">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 class="text-white fw-bold">
                        Distribuidores autorizados de TeamViewer México
                    </h1>
                    <h3 class="text-blue fw-bold">
                        ¡Te otorgamos factura fiscal mexicana con tu compra!
                    </h3>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{ asset('assets/images/teamviewer/teamviewer-logo.png') }}" alt=""
                        class="teamviewer-image">
                </div>
            </div>
        </div>

        {{-- SEC2 --}}
        <div class="container-fluid sec2 d-pad text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-dark-blue fw-bold">
                        Mejora la productividad de tu empresa con<br> TeamViewer México
                    </h2>
                    <p class="fw-regular">
                        Invierte en la optimización y digitalización de los procesos de tu empresa con TeamViewer México,
                        un software de control, soporte y acceso remoto a tus dispositivos para la solución eficiente de
                        problemas técnicos.
                    </p>
                    <p class="fw-bold mb-5">
                        ¡Adquiere tu licencia con nosotros y obtén tu factura fiscal XML!
                    </p>
                    <a href="#contacto" class="btn-cta"> Comprar ahora </a>
                </div>
            </div>
        </div>

        {{-- INTERSECTION --}}
        <div class="d-pad-s">
            <div class="divider"></div>
        </div>

        {{-- SEC3 --}}
        <div class="container-fluid sec3 d-pad">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="text-dark-blue fw-bold text-center">
                        Comienza a disfrutar los beneficios de <br> TeamViewer México para tu empresa
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-control.png') }}" alt=""
                        class="w-100 mb-4">
                    <div class="d-flex mb-3">
                        <div class="pink-quote me-4"></div>
                        <h3 class="mb-0">Acceso y control <br> remoto</h3>
                    </div>
                    <p>
                        <strong>TeamViewer México</strong> te permite tener acceso total a tus archivos, aplicaciones,
                        dispositivos móviles y servidores desde cualquier lugar.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-soporte.png') }}" alt=""
                        class="w-100 mb-4">
                    <div class="d-flex mb-3">
                        <div class="pink-quote me-4"></div>
                        <h3 class="mb-0">Soporte técnico a<br> distancia</h3>
                    </div>
                    <p>
                        Resuelve problemas técnicos de manera más rápida y sencilla con la asistencia
                        remota instantánea para profesionales y equipos de TI que ofrece <strong>TeamViewer México.</strong>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-acceso.png') }}" alt=""
                        class="w-100 mb-4">
                    <div class="d-flex mb-3">
                        <div class="pink-quote me-4"></div>
                        <h3 class="mb-0">Control de equipo</h3>
                    </div>
                    <p>
                        <strong>TeamViewer México</strong> controla los procesos de diversos dispositivos para brindarles
                        asistencia
                        en cualquier momento y lugar.
                    </p>
                    <p>
                        ¡Es compatible con Android y ofrece la primera pantalla compartida para iOS!
                    </p>
                </div>
            </div>
        </div>

        {{-- INTERSECTION --}}
        <div class="d-pad-s">
            <div class="divider"></div>
        </div>

        {{-- SEC4 --}}
        <div class="container-fluid sec4 d-pad">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="text-dark-blue fw-bold text-center">
                        ¿Por qué cada vez más empresas <br> adquieren TeamViewer México?
                    </h2>
                </div>
            </div>
            <div class="row align-items-center gx-5">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-img-01.png') }}" alt=""
                        class="w-100 mb-4">
                </div>
                <div class="col-md-8">
                    <div class="d-flex mb-3">
                        <div class="pink-quote me-4 f-none"></div>
                        <div class="info">
                            <h3 class="mb-3">Rapidez en la solución de problemas</h3>
                            <p>
                                <strong> TeamViewer México </strong> está diseñado para ser
                                fácil de usar y obtener soporte remoto inmediato ante diversos
                                problemas técnicos para no afectar la productividad de las empresas.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="pink-quote me-4 f-none"></div>
                        <div class="info">
                            <h3 class="mb-3">Software altamente seguro</h3>
                            <p>
                                <strong> TeamViewer México </strong> cuenta con altos estándares de
                                seguridad protegiendo tu información con la autenticación de dos
                                factores, ID de asistencia y otras medidas de autorización.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEC5 --}}
        <div class="container-fluid sec5 d-pad text-white">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="d-flex mb-3">
                        <div class="pink-quote me-4 f-none"></div>
                        <div class="info">
                            <h3 class="fw-bold mb-3">
                                ¡Adquiere TeamViewer México con nosotros!
                            </h3>
                            <p class="mb-0">
                                Con más de 18 años de experiencia, en CompuMedic ofrecemos las
                                mejores soluciones de soporte técnico, además, somos distribuidor
                                autorizado de <strong>TeamViewer México</strong> y ofrecemos más
                                de 150 marcas de licenciamiento de software original,
                                ¡con factura fiscal en tu compra!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEC6 --}}
        <div class="container-fluid sec6 d-pad">
            <div class="row gx-5 align-items-center">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-img-02.png') }}" alt=""
                        class="w-100">
                </div>
                <div class="col-md-8">
                    <h2 class="text-dark-blue fw-bold">
                        Haz deducible tu compra de TeamViewer México
                    </h2>
                    <p>
                        En CompuMedic obtienes el mejor precio de <strong>TeamViewer México</strong> en el mercado, además,
                        al pagar por Transferencia
                        Electrónica SPEI en banco mexicano, recibes una factura fiscal XML 100% válida para hacer tu compra
                        deducible
                        de impuestos ante el SAT.
                    </p>
                </div>
            </div>
        </div>

        {{-- INTERSECTION --}}
        <div class="d-pad-s">
            <div class="divider"></div>
        </div>

        {{-- SEC7 --}}
        <div class="container-fluid sec7 d-pad">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="text-dark-blue fw-bold text-center">
                        Ofrecemos la licencia de TeamViewer <br> México ideal para tu empresa
                    </h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="card-box position-relative text-center h-100">
                        <div class="card-header">
                            <div class="icon mb-4"></div>
                            <p class="mb-0 text-dark-blue">TeamViewer México</p>
                            <h3 class="text-blue fw-bold mb-0">Business</h3>
                        </div>
                        <div class="card-body">
                            <p class="fs-15">
                                &bullet; Para un usuario con licencia <br>
                                &bullet; Conexión concurrente (canal) <br>
                                &bullet; 200 dispositivos gestionados <br>
                                &bullet; Posibilidad de conectarse desde 3 dispositivos predefinidos <br>
                                &bullet; Terminales ilimitados <br>
                                &bullet; 3 sesiones simultáneas (en pestañas) por conexión concurrente <br>
                                &bullet; Asistencia técnica por teléfono
                            </p>
                            <p class="text-dark-blue fw-bold mb-0 fs-20">$599MXN al mes</p>
                            <p class="text-blue fs-15">(facturado anualmente)</p>
                            <a href="#contacto"
                                class="btn-cta position-absolute top-100 start-50 translate-middle">Adquiérela hoy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box position-relative text-center h-100">
                        <div class="card-header">
                            <div class="icon mb-4"></div>
                            <p class="mb-0 text-dark-blue">TeamViewer México</p>
                            <h3 class="text-blue fw-bold mb-0">Premium</h3>
                        </div>
                        <div class="card-body">
                            <p class="fs-15">
                                &bullet; Para 15 usuarios con licencia<br>
                                &bullet; Conexión concurrente (canal)<br>
                                &bullet; 300 dispositivos gestionados<br>
                                &bullet; Capacidad de conexión a un número ilimitado de dispositivos<br>
                                &bullet; Terminales ilimitados<br>
                                &bullet; 10 sesiones simultáneas (en pestañas) por conexión concurrente<br>
                                &bullet; Informes de conexiones salientes
                            </p>
                            <p class="text-dark-blue fw-bold mb-0 fs-20">$1,190MXN al mes</p>
                            <p class="text-blue fs-15">(facturado anualmente)</p>
                            <a href="#contacto"
                                class="btn-cta position-absolute top-100 start-50 translate-middle">Adquiérela hoy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box position-relative text-center h-100">
                        <div class="card-header">
                            <div class="icon mb-4"></div>
                            <p class="mb-0 text-dark-blue">TeamViewer México</p>
                            <h3 class="text-blue fw-bold mb-0">Corporate</h3>
                        </div>
                        <div class="card-body">
                            <p class="fs-15">
                                &bullet; Para 30 usuarios con licencia<br>
                                &bullet; 3 conexiones concurrentes (canales)<br>
                                &bullet; 500 dispositivos gestionados<br>
                                &bullet; Capacidad de conexión a un número ilimitado de dispositivos<br>
                                &bullet; Terminales ilimitados<br>
                                &bullet; 15 sesiones simultáneas (en pestañas) por conexión concurrente<br>
                                &bullet; Informes de conexiones salientes y entrantes<br>
                                &bullet; Implementación masiva
                            </p>
                            <p class="text-dark-blue fw-bold mb-0 fs-20">$2,390MXN al mes</p>
                            <p class="text-blue fs-15">(facturado anualmente)</p>
                            <a href="#contacto"
                                class="btn-cta position-absolute top-100 start-50 translate-middle">Adquiérela hoy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEC8 --}}
        <div class="container-fluid sec8 d-pad text-white">
            <div class="row">
                <div class="col-md-9">
                    <div class="d-flex mb-3">
                        <div class="pink-quote me-4 f-none"></div>
                        <div class="info">
                            <h3 class="fw-bold mb-3">
                                ¡CompuMedic es tu mejor opción!
                            </h3>
                            <p class="mb-0">
                                Obtén los beneficios del sistema TeamViewer México con los líderes
                                en soporte técnico que te ofrecen factura fiscal en tu compra.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SE9 --}}
        <div class="container-fluid sec9 d-pad ">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-dark-blue fw-bold mb-5 text-center">
                        Te ayudamos a resolver tus dudas sobre<br> TeamViewer México
                    </h2>

                    <div class="accordion faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button fw-bold text-dark-blue" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-1" aria-expanded="true"
                                    aria-controls="faq-1">
                                    ¿Qué es TeamViewer México y cómo puede beneficiar a mi empresa?
                                </button>
                            </h3>
                            <div id="faq-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                   <p>
                                        El TeamViewer es un sistema de asistencia que brinda acceso a 
                                        dispositivos a larga distancia para facilitar las operaciones 
                                        de tu empresa, así como para solucionar problemas técnicos de 
                                        manera remota. 
                                   </p>
                                   <p>
                                        Entre los beneficios que tiene el <strong>TeamViewer México</strong> para las empresas están:<br>
                                        &bullet; Poder atender a los clientes a distancia. <br>
                                        &bullet; Trabajar de manera remota. <br>
                                        &bullet; Conectarse a dispositivos sin la asistencia de terceros. <br>
                                        &bullet; Establecer control e intercambiar archivos entre dispositivos.
                                   </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark-blue" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-2" aria-expanded="false"
                                    aria-controls="faq-2">
                                    ¿Cuántas instalaciones de TeamViewer México permite una licencia y cómo se gestionan?
                                </button>
                            </h3>
                            <div id="faq-2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        Las instalaciones permitidas de TeamViewer son para 1, 15 o hasta 30 usuarios
                                        dependiendo del tipo de licencia adquirida, permitiéndolos hacer uso libre de
                                        sus funciones y teniendo la capacidad de gestionar 200, 300 o 500 dispositivos
                                        según su licencia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark-blue" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-3" aria-expanded="false"
                                    aria-controls="faq-3">
                                    ¿Cuál es el costo de una licencia de TeamViewer y cuáles son los métodos de pago disponibles?
                                </button>
                            </h3>
                            <div id="faq-3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        El sistema <strong>TeamViewer México</strong> tiene un costo diferente según el
                                        tipo de licencia, contáctanos para cotizar el servicio que necesitas.  
                                    </p>
                                    <p>
                                        En CompuMedic manejamos el método de pago de TeamViewer por Transferencia
                                        Electrónica SPEI en banco mexicano para ofrecerte una mayor facilidad de pago,
                                        así como otorgarte una factura fiscal.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark-blue" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-4" aria-expanded="false"
                                    aria-controls="faq-4">
                                    ¿Puedo obtener una factura XML deducible ante el SAT por la compra de una licencia de TeamViewer México?
                                </button>
                            </h3>
                            <div id="faq-4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        ¡Sí! En CompuMedic obtienes con tu compra de TeamViewer una factura
                                        fiscal XML 100% válida para deducir impuestos ante el SAT.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark-blue" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-5" aria-expanded="false"
                                    aria-controls="faq-5">
                                    ¿Qué ventajas tiene comprar la licencia de TeamViewer México a través de CompuMedic?
                                </button>
                            </h3>
                            <div id="faq-5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        Al comprar tu licencia de <strong>TeamViewer México</strong> con nosotros obtienes diversas
                                        ventajas, como el mejor precio de este software en el mercado, además de
                                        la facilidad de pagar por Transferencia Electrónica SPEI en banco mexicano
                                        y recibir una factura fiscal XML para deducir tu compra de impuestos ante el SAT.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark-blue" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-6" aria-expanded="false"
                                    aria-controls="faq-6">
                                    ¿Cuál es el proceso de entrega de la licencia después de realizar la compra?
                                </button>
                            </h3>
                            <div id="faq-6" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        Una vez que compras una licencia de <strong>TeamViewer México</strong> recibirás
                                        varios correos: dos de activación, uno para el Customer Portal y
                                        uno para activar la licencia. En el mismo correo vendrán instrucciones
                                        en forma de guía o video para instalar el programa en tu dispositivo. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark-blue" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-7" aria-expanded="false"
                                    aria-controls="faq-7">
                                    ¿La licencia de TeamViewer incluye actualizaciones y nuevas versiones del software?
                                </button>
                            </h3>
                            <div id="faq-7" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        ¡Por supuesto! Cada una de las licencias de <strong>TeamViewer México</strong>
                                        permite a los usuarios ejecutar las actualizaciones disponibles para disfrutar de un mejor sistema.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEC10 - FORM --}}
        <div class="container-fluid sec10 d-pad">
            <div class="row gx-5">
                <div class="col-md-6">
                    <h3 class="text-white fw-bold mb-5">
                        ¡Contáctanos para adquirir tu<br>
                        software <span class="text-blue">TeamViewer México!</span>
                    </h3>
                    <form class="rounded-4">
                        <input type="text" placeholder="Nombre completo:" name="nombre" class="form-control mb-2"
                            required>
                        <input type="tel" placeholder="Teléfono" name="telefono" class="form-control mb-2" required>
                        <input type="email" placeholder="Correo Electrónico" name="email" class="form-control mb-2"
                            required>
                        <textarea placeholder="Mensaje" name="mensaje" rows="5" class="form-control mb-4"></textarea>
                        <button class="btn-cta w-100">Enviar</button>
                    </form>
                    </h3>
                </div>
                <div class="col-md-6 position-relative desktop-item">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-banner-footer-fig.png') }}" alt=""
                        class="figure">
                </div>
            </div>
        </div>

    </div>
@endsection
