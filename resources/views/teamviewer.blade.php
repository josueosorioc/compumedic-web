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
                        Mejora la productividad de tu empresa con TeamViewer México
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
                    <h3 class="mb-3">Acceso y control <br> remoto</h3>
                    <p>
                        <strong>TeamViewer México</strong> te permite tener acceso total a tus archivos, aplicaciones,
                        dispositivos móviles y servidores desde cualquier lugar.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-soporte.png') }}" alt=""
                        class="w-100 mb-4">
                    <h3 class="mb-3">Soporte técnico a distancia</h3>
                    <p>
                        Resuelve problemas técnicos de manera más rápida y sencilla con la asistencia
                        remota instantánea para profesionales y equipos de TI que ofrece <strong>TeamViewer México.</strong>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-acceso.png') }}" alt=""
                        class="w-100 mb-4">
                    <h3 class="mb-3"> Control de equipo</h3>
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

        {{-- SEC4 --}}
        <div class="container-fluid sec4 d-pad">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="text-dark-blue fw-bold text-center">
                        ¿Por qué cada vez más empresas <br> adquieren TeamViewer México?
                    </h2>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-img-01.png') }}" alt=""
                        class="w-100 mb-4">
                </div>
                <div class="col-md-8">
                    <h3 class="mb-3">Rapidez en la solución de problemas</h3>
                    <p>
                        <strong> TeamViewer México </strong> está diseñado para ser fácil de usar y obtener soporte remoto
                        inmediato
                        ante diversos problemas técnicos para no afectar la productividad de las empresas.
                    </p>
                    <h3 class="mb-3">Software altamente seguro</h3>
                    <p>
                        <strong> TeamViewer México </strong> cuenta con altos estándares de seguridad protegiendo tu
                        información con la
                        autenticación de dos factores, ID de asistencia y otras medidas de autorización.
                    </p>
                </div>

            </div>

        </div>

        {{-- SEC5 --}}
        <div class="container-fluid sec5 d-pad text-white">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h3 class="fw-bold mb-3">
                        ¡Adquiere TeamViewer México con nosotros!
                    </h3>
                    <p>
                        Con más de 18 años de experiencia, en CompuMedic ofrecemos las mejores soluciones de
                        soporte técnico, además, somos distribuidor autorizado de <strong>TeamViewer México</strong> y
                        ofrecemos
                        más de 150 marcas de licenciamiento de software original, ¡con factura fiscal en tu compra!
                    </p>
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
                    <div class="card-box position-relative text-center">
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
                            <p class="text-dark-blue fw-bold mb-0">$599MXN al mes</p>
                            <p class="text-blue">(facturado anualmente)</p>
                            <a href="#contacto" class="btn-cta position-absolute top-100 start-50 translate-middle">Adquiérela hoy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box position-relative text-center">
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
                            <p class="text-dark-blue fw-bold mb-0">$599MXN al mes</p>
                            <p class="text-blue">(facturado anualmente)</p>
                            <a href="#contacto" class="btn-cta position-absolute top-100 start-50 translate-middle">Adquiérela hoy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box position-relative text-center">
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
                            <p class="text-dark-blue fw-bold mb-0">$599MXN al mes</p>
                            <p class="text-blue">(facturado anualmente)</p>
                            <a href="#contacto" class="btn-cta position-absolute top-100 start-50 translate-middle">Adquiérela hoy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEC8 --}}
        <div class="container-fluid sec8 d-pad text-white">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="fw-bold mb-3">
                        ¡CompuMedic es tu mejor opción!
                    </h3>
                    <p>
                        Obtén los beneficios del sistema TeamViewer México con los líderes
                        en soporte técnico que te ofrecen factura fiscal en tu compra.
                    </p>
                </div>
            </div>
        </div>

        {{-- SE9 --}}
        <div class="container-fluid sec9 d-pad text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-dark-blue fw-bold">
                        Te ayudamos a resolver tus dudas sobre<br> TeamViewer México
                    </h2>
                </div>
            </div>
        </div>



    </div>
@endsection
