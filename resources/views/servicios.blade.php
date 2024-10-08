<x-layout>

    <x-slot:title>Servicios</x-slot:title>

    <div class="servicios-section">
    <h1 class="titulo-servicios mb-3"><span>Servicios</span></h1>    
    <div class="linea-amarilla"></div>
    </div>
    

    <div class="container my-4">
        <div class="row">
            @foreach($servicios as $servicio)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $servicio->imagen }}" class="card-img-top" alt="Imagen de la sala VIP">
                        <div class="card-body">
                            <h3 class="card-title">{{ $servicio->nombre }}</h3>
                            <p class="card-text">{{ $servicio->descripcion }}</p>
                            <p>Tarifa acceso: <strong>USD {{ $servicio->tarifa_acceso }}</strong></p>
                            <p>Tarifa socios: <strong>USD {{ $servicio->tarifa_socios }}</strong></p>
                            <p><strong>Condiciones:</strong> {{ $servicio->condiciones }}</p>
                            <a href="#" class="btn btn-warning">Reservar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
