<nav class="navbar navbar-expand-lg" data-bs-theme="white">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.webp') }}" alt=""
                class="logo">
        </a>
        <a class="btn-cta bg-red mobile-item" href="tel:8183000544">8183000544</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="https://www.reparaciondecomputadora.mx/" target="_blank">Reparación de computadoras</a>
                <a class="nav-link" href="https://www.soportetecnicomty.com/" target="_blank">Soporte Técnico</a>
                <a class="nav-link" href="https://www.ventadecomputadoras.mx/" target="_blank">Venta de computadoras</a>
                <a class="nav-link" href="https://www.cotizatusoftware.mx/" target="_blank">Venta de Software</a>
                <a class="nav-link" href="{{ url('teamviewer-mexico-distribuidor') }}">TeamViewer</a>
            </div>
        </div>
        <a class="btn-cta bg-red ms-2 desktop-item" href="tel:8183000544">8183000544</a>
    </div>
</nav>
