<?php

/** @var \App\Models\Novedad[] $novedad */
?>

<x-layout>
    <x-slot:title>Confimación para eliminar: {{ $novedad->titulo }}</x-slot:title>
    <h1 class="mb-3">Confirmación para eliminar</h1>


    <p class="mb-3 h2 mt-4">Confimación para eliminar: <b>{{ $novedad->titulo }}</b>.</p>
    <p>¿Desea continuar?</p>

    <form action="{{ url('/admin/novedades/' . $novedad->novedades_id . '/eliminar') }}" method="post">
        <button type="submit" class="btn btn-danger">Si, eliminar <b>{{ $novedad->titulo }}</b></button>
    </form>


    <div class="container mb-4 mt-5">
        <p class="mb-3 h2">{{ $novedad->titulo }}</p>
        <div class="row">
            <div class="card cardModificada">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <footer class="blockquote-footer">
                            <cite title="Source Title">Fecha de publicación: {{ $novedad->fecha_publicacion }} - Categoria: {{ $novedad->categoria }}</cite>
                        </footer>
                        <p>{{ $novedad->info_abreviada }}</p>

                        <div>{{ $novedad->descripcion }}</div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</x-layout>