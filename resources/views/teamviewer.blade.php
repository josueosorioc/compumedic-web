@extends('main')

@section('title', 'TeamViewer México con Factura Fiscal Mexicana')
@section('canonical')
<link rel="canonical" href="https://www.compumedic.mx/teamviewer-mexico">
@endsection
@section('description')
<meta name="description" content="Somos distribuidores de TeamViewer en México, te otorgamos factura fiscal Mexicana en la compra de tu licencia ¡Empieza a disfrutar de la conectividad.">
@endsection

@section('schema')
{{-- Breadcrumb --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org/", 
    "@type": "BreadcrumbList", 
    "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.compumedic.mx/"  
    },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "TeamViewer México",
    "item": "https://www.compumedic.mx/teamviewer-mexico"  
    }]
}
</script>
{{-- LocalBusiness --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Compumedic",
    "image": "https://le-cdn.website-editor.net/s/3df20299424b42c2aa5e0cfc261e3a51/dms3rep/multi/opt/Compumedic_logoRojo-174w-162w.png?Expires=1689264488&Signature=M1FhNAgMR1f1XX7RiyAxx9qZm8U5b3luNoC3LezPdWCR5n0n7kTGNjkm-m0ViWSuCVNHLyspj-W-nG3zqPxuTvGTbNIX-ODGk73m3kjkyXc-pd5PFglNKXhV9KlTLbBPMUi8xoads1jVpu-Gt4stvNoWDWa7eBU3QDbpA7dSnjWE8Bwi15Eb3Y-Dx-s8d8oMu5O8LeQ9Dg3mSjbD0gSRpdgryZ094teugwxs2fpcu~IzcAUmz30vAuniuWRYPI8DW-3iKrLaOsKvNu9Q1CNe5VMtXplQC0HpNOHWxfv65uKKEMzr9y3JY7hX~N3gdRPHrWnYMTBxK6PD8wh~Jaes5A__&Key-Pair-Id=K2NXBXLF010TJW",
    "@id": "https://www.compumedic.mx/teamviewer-mexico",
    "url": "https://www.compumedic.mx/teamviewer-mexico",
    "telephone": "8183000544",
    "priceRange": "$$",
    "address": {
    "@type": "PostalAddress",
    "streetAddress": "Gran Parque 442",
    "addressLocality": "Monterrey",
    "postalCode": "64610",
    "addressCountry": "MX"
    }  
}
</script>
{{-- Website --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "Compumedic",
    "url": "https://www.compumedic.mx/teamviewer-mexico",
    "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.compumedic.mx/teamviewer-mexico/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
    }
}
</script>
    
@endsection 
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/teamviewer.css') }}">
@endsection

@section('content')

    <div class="teamviewer">

        {{-- SEC1 --}}
        <div class="container-fluid sec1 d-pad">
            <div class="row align-items-center">
                <div class="col-md-7 text-md-start text-center mb-3">
                    <h1 class="text-white fw-bold">
                        Distribuidores autorizados de <strong>TeamViewer en México</strong>
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
                    <h2 class="text-dg fw-bold">
                        Mejora la productividad de tu empresa con<br> TeamViewer en México
                    </h2>
                    <p class="fw-regular">
                        Invierte en la optimización y digitalización de los procesos de tu empresa con TeamViewer en México,
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
                    <h2 class="text-dg fw-bold text-center">
                        Comienza a disfrutar los beneficios de <br> TeamViewer en México para tu empresa
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-control.png') }}" alt=""
                        class="w-100 mb-4">
                    <div class="d-flex mb-3">
                        <div class="quote bg-pink me-4"></div>
                        <h3 class="mb-0">Acceso y control <br> remoto</h3>
                    </div>
                    <p>
                        <strong>TeamViewer en México</strong> te permite tener acceso total a tus archivos, aplicaciones,
                        dispositivos móviles y servidores desde cualquier lugar.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-soporte.png') }}" alt=""
                        class="w-100 mb-4">
                    <div class="d-flex mb-3">
                        <div class="quote bg-pink me-4"></div>
                        <h3 class="mb-0">Soporte técnico a<br> distancia</h3>
                    </div>
                    <p>
                        Resuelve problemas técnicos de manera más rápida y sencilla con la asistencia
                        remota instantánea para profesionales y equipos de TI que ofrece <strong>TeamViewer en México.</strong>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-acceso.png') }}" alt=""
                        class="w-100 mb-4">
                    <div class="d-flex mb-3">
                        <div class="quote bg-pink me-4"></div>
                        <h3 class="mb-0">Control de equipo</h3>
                    </div>
                    <p class="mt-5">
                        <strong>TeamViewer en México</strong> controla los procesos de diversos dispositivos para brindarles
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
                    <h2 class="text-dg fw-bold text-center">
                        ¿Por qué cada vez más empresas <br> adquieren TeamViewer en México?
                    </h2>
                </div>
            </div>
            <div class="row align-items-center gx-5">
                <div class="col-md-4 desktop-item">
                    <img src="{{ asset('assets/images/home/compumedic-banner-teamviewer-img-2.png') }}" alt=""
                        class="w-100 mb-4">
                </div>
                <div class="col-md-8">
                    <div class="d-flex mb-md-3 mb-0">
                        <div class="quote bg-pink me-4 f-none"></div>
                        <div class="info">
                            <h3 class="mb-3">Rapidez en la solución de problemas</h3>
                            <p class="desktop-item">
                                <strong> TeamViewer en México </strong> está diseñado para ser
                                fácil de usar y obtener soporte remoto inmediato ante diversos
                                problemas técnicos para no afectar la productividad de las empresas.
                            </p>
                        </div>
                    </div>
                    <p class="mobile-item mb-4">
                        <strong> TeamViewer en México </strong> está diseñado para ser
                        fácil de usar y obtener soporte remoto inmediato ante diversos
                        problemas técnicos para no afectar la productividad de las empresas.
                    </p>
                    <div class="d-flex mb-md-3 mb-0">
                        <div class="quote bg-pink me-4 f-none"></div>
                        <div class="info">
                            <h3 class="mb-3">Software altamente seguro</h3>
                            <p class="desktop-item">
                                <strong> TeamViewer en México </strong> cuenta con altos estándares de
                                seguridad protegiendo tu información con la autenticación de dos
                                factores, ID de asistencia y otras medidas de autorización.
                            </p>
                        </div>
                    </div>
                    <p class="mobile-item">
                        <strong> TeamViewer en México </strong> cuenta con altos estándares de
                        seguridad protegiendo tu información con la autenticación de dos
                        factores, ID de asistencia y otras medidas de autorización.
                    </p>
                </div>
            </div>
        </div>

        {{-- SEC5 --}}
        <div class="container-fluid sec5 d-pad text-white">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="d-flex mb-3">
                        {{-- <div class="quote bg-pink me-4 f-none"></div> --}}
                        <div class="info">
                            <h3 class="fw-bold mb-3">
                                ¡Adquiere TeamViewer en México con nosotros!
                            </h3>
                            <p class="mb-0 desktop-item">
                                Con más de 18 años de experiencia, en CompuMedic ofrecemos las
                                mejores soluciones de soporte técnico, además, somos distribuidor
                                autorizado de <strong>TeamViewer en México</strong> y ofrecemos más
                                de 150 marcas de licenciamiento de software original,
                                ¡con factura fiscal en tu compra!
                            </p>
                        </div>
                    </div>
                    <p class="mb-0 mobile-item">
                        Con más de 18 años de experiencia, en CompuMedic ofrecemos las
                        mejores soluciones de soporte técnico, además, somos distribuidor
                        autorizado de <strong>TeamViewer en México</strong> y ofrecemos más
                        de 150 marcas de licenciamiento de software original,
                        ¡con factura fiscal en tu compra!
                    </p>
                </div>
            </div>
        </div>

        {{-- SEC6 --}}
        <div class="container-fluid sec6 d-pad">
            <div class="row gx-5 align-items-center">
                <div class="col-md-4 desktop-item">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-img-02.png') }}" alt=""
                        class="w-100">
                </div>
                <div class="col-md-8 text-md-start text-center">
                    <h2 class="text-dg fw-bold">
                        Haz deducible tu compra de TeamViewer en México
                    </h2>
                    <p>
                        En CompuMedic obtienes el mejor precio de <strong>TeamViewer en México</strong> en el mercado, además,
                        al pagar por Transferencia
                        Electrónica SPEI en banco mexicano, recibes una factura fiscal XML 100% válida para hacer tu compra
                        deducible
                        de impuestos ante el SAT.
                    </p>
                    <img src="{{ asset('assets/images/teamviewer/compumedic-teamviewer-img-02.png') }}" alt=""
                        class="w-100 mobile-item mt-4">
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
                    <h2 class="text-dg fw-bold text-center">
                        Ofrecemos la licencia de TeamViewer <br> México ideal para tu empresa
                    </h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="card-box position-relative text-center h-100">
                        <div class="card-header">
                            <div class="icon mb-4"></div>
                            <p class="mb-0 text-dg">TeamViewer en México</p>
                            <h3 class="text-dg fw-bold mb-0">Business</h3>
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
                            
                            <a href="#contacto"
                                class="btn-cta position-absolute top-100 start-50 translate-middle">Adquiérela hoy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box position-relative text-center h-100">
                        <div class="card-header">
                            <div class="icon mb-4"></div>
                            <p class="mb-0 text-dg">TeamViewer en México</p>
                            <h3 class="text-dg fw-bold mb-0">Premium</h3>
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
                            
                            <a href="#contacto"
                                class="btn-cta position-absolute top-100 start-50 translate-middle">Adquiérela hoy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box position-relative text-center h-100">
                        <div class="card-header">
                            <div class="icon mb-4"></div>
                            <p class="mb-0 text-dg">TeamViewer en México</p>
                            <h3 class="text-dg fw-bold mb-0">Corporate</h3>
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
                        {{-- <div class="quote bg-pink me-4 f-none"></div> --}}
                        <div class="info">
                            <h3 class="fw-bold mb-3">¡CompuMedic es tu mejor opción!</h3>
                            <p class="mb-0 desktop-item">
                                Obtén los beneficios del sistema TeamViewer en México con los líderes
                                en soporte técnico que te ofrecen factura fiscal en tu compra.
                            </p>
                        </div>
                    </div>
                    <p class="mb-0 mobile-item">
                        Obtén los beneficios del sistema TeamViewer en México con los líderes
                        en soporte técnico que te ofrecen factura fiscal en tu compra.
                    </p>
                </div>
            </div>
        </div>

        {{-- SE9 --}}
        <div class="container-fluid sec9 d-pad ">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-dg fw-bold mb-5 text-center">
                        Te ayudamos a resolver tus dudas sobre<br> TeamViewer en México
                    </h2>

                    <div class="accordion faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button fw-bold text-dg" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="true"
                                    aria-controls="faq-1">
                                    ¿Qué es TeamViewer en México y cómo puede beneficiar a mi empresa?
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
                                        Entre los beneficios que tiene el <strong>TeamViewer en México</strong> para las
                                        empresas están:<br>
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
                                <button class="accordion-button collapsed fw-bold text-dg" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false"
                                    aria-controls="faq-2">
                                    ¿Cuántas instalaciones de TeamViewer en México permite una licencia y cómo se gestionan?
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
                                <button class="accordion-button collapsed fw-bold text-dg" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false"
                                    aria-controls="faq-3">
                                    ¿Cuál es el costo de una licencia de TeamViewer y cuáles son los métodos de pago
                                    disponibles?
                                </button>
                            </h3>
                            <div id="faq-3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        El sistema <strong>TeamViewer en México</strong> tiene un costo diferente según el
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
                                <button class="accordion-button collapsed fw-bold text-dg" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false"
                                    aria-controls="faq-4">
                                    ¿Puedo obtener una factura XML deducible ante el SAT por la compra de una licencia de
                                    TeamViewer en México?
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
                                <button class="accordion-button collapsed fw-bold text-dg" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false"
                                    aria-controls="faq-5">
                                    ¿Qué ventajas tiene comprar la licencia de TeamViewer en México a través de CompuMedic?
                                </button>
                            </h3>
                            <div id="faq-5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        Al comprar tu licencia de <strong>TeamViewer en México</strong> con nosotros obtienes
                                        diversas
                                        ventajas, como el mejor precio de este software en el mercado, además de
                                        la facilidad de pagar por Transferencia Electrónica SPEI en banco mexicano
                                        y recibir una factura fiscal XML para deducir tu compra de impuestos ante el SAT.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dg" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-6" aria-expanded="false"
                                    aria-controls="faq-6">
                                    ¿Cuál es el proceso de entrega de la licencia después de realizar la compra?
                                </button>
                            </h3>
                            <div id="faq-6" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        Una vez que compras una licencia de <strong>TeamViewer en México</strong> recibirás
                                        varios correos: dos de activación, uno para el Customer Portal y
                                        uno para activar la licencia. En el mismo correo vendrán instrucciones
                                        en forma de guía o video para instalar el programa en tu dispositivo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button last collapsed fw-bold text-dg" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq-7" aria-expanded="false"
                                    aria-controls="faq-7">
                                    ¿La licencia de TeamViewer incluye actualizaciones y nuevas versiones del software?
                                </button>
                            </h3>
                            <div id="faq-7" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        ¡Por supuesto! Cada una de las licencias de <strong>TeamViewer en México</strong>
                                        permite a los usuarios ejecutar las actualizaciones disponibles para disfrutar de un
                                        mejor sistema.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- SEC11 FORM --}}
        <div class="container-fluid sec11 d-pad " id="contacto">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="fw-bold text-white mb-4">
                        Contáctanos
                    </h2>
                    <p class="text-white ">
                        ¿Tienes alguna pregunta? Estamos aquí para ayudar.  Envíanos un mensaje y nos pondremos en contacto.
                    </p>

                    <div class="formulario mt-5">
                        <iframe aria-label='Contactanos' frameborder="0" style="height:780px;width:99%;border:none;" src='https://forms.zohopublic.com/elarabe82/form/ContactUs/formperma/9fOOGXkBe86ICbetvXb2D88kuyf4-29VvsTb5hMsAgU'></iframe>
                        {{-- <form action="{{ route('send.lead') }}" method="POST">
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger w-100" role="alert">
                                @if (is_array($message))
                                    @foreach ($message as $msg)
                                        &bullet; {!! $msg !!}<br>
                                    @endforeach
                                @else
                                    {{ $message }}
                                @endif
                            </div>
                        @endif
                        @csrf
                            <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre:">
                            <input type="number" name="telefono" class="form-control mb-2" placeholder="Telefono:">
                            <input type="text" name="email" class="form-control mb-2" placeholder="Email:">
                            <textarea class="form-control mb-4" name="mensaje" rows="3" placeholder="Mensaje:"></textarea>

                            <button type="submit" class="btn-cta bg-red w-100">Enviar</button>
                        </form> --}}
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        {{-- SEC10 - FORM
        <div class="container-fluid sec10 d-pad" id="contacto">
            <div class="row gx-5">
                <div class="col-md-6">
                    <h3 class="text-white fw-bold mb-5 text-md-start text-center">
                        ¡Contáctanos para adquirir tu<br>
                        software <span class="text-blue">TeamViewer en México!</span>
                    </h3>
                    <form class="rounded-4" action="{{ route('send.lead') }}" method="POST">
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger w-100" role="alert">
                                @if (is_array($message))
                                    @foreach ($message as $msg)
                                        &bullet; {!! $msg !!}<br>
                                    @endforeach
                                @else
                                    {{ $message }}
                                @endif
                            </div>
                        @endif
                        @csrf
                        <input type="text" placeholder="Nombre completo:" name="nombre" class="form-control mb-2"
                            required>
                        <input type="tel" placeholder="Teléfono" name="telefono" class="form-control mb-2" required>
                        <input type="email" placeholder="Correo Electrónico" name="correo" class="form-control mb-2"
                            required>
                        <textarea placeholder="Mensaje" name="mensaje" rows="5" class="form-control mb-4"></textarea>

                        {{-- CAMPOS UTM --}}
                        {{-- <input type="hidden" name="utm_id"
                            value="{{ !empty($_GET['utm_id']) ? $_GET['utm_id'] : '' }}">
                        <input type="hidden" name="utm_content"
                            value="{{ !empty($_GET['utm_content']) ? $_GET['utm_content'] : '' }}">
                        <input type="hidden" name="utm_term"
                            value="{{ !empty($_GET['utm_term']) ? $_GET['utm_term'] : '' }}">
                        <input type="hidden" name="utm_medium"
                            value="{{ !empty($_GET['utm_medium']) ? $_GET['utm_medium'] : '' }}">
                        <input type="hidden" name="utm_source"
                            value="{{ !empty($_GET['utm_source']) ? $_GET['utm_source'] : '' }}">
                        <input type="hidden" name="utm_campaign"
                            value="{{ !empty($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' }}">
                        <button class="btn-cta w-100">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6 position-relative desktop-item">
                    <img src="{{ asset('assets/images/teamviewer/compumedic-banner-footer-fig.png') }}" alt=""
                        class="figure">
                </div>
            </div>
        </div> --}}

    </div>
@endsection
