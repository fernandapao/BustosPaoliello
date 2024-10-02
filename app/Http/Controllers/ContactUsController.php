<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // Método que muestra la vista con el formulario
    public function index() {
        return view('contactanos');
    }

    // Método que maneja el envío del formulario y redirige con mensaje de éxito
    public function contacto(Request $request)
    {
        // Aquí podrías procesar los datos si es necesario (opcional)
        
        // Solo devuelves la vista con un mensaje flash
        return redirect()->route('contactanos')->with('success', '¡Tu mensaje ha sido enviado con éxito!');
    }
}
