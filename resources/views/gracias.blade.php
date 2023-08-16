@extends('main')

@section('title')
    Gracias
@endsection

@section('content')
    <div class="gracias">
        <div class="container-fluid sec1 d-pad text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-bold">¡Muchas gracias por contactarnos!</h1>
                    <p class="fs-20">
                        Recibimos tus datos, en breve
                        un asesor se comunicará contigo.
                    </p>
                    <a href="{{ url('/') }}" class="btn-cta mt-5 mb-5">IR A INICIO</a>
                </div>
            </div>
        </div>
    </div>
@endsection