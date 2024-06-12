<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'ci' => 'required|string|max:20',
            'telephone' => 'required|string|max:20',
            'valor_casa' => 'required|string|in:Desde $145.000,Desde $165.000,Desde $200.000,Desde $250.000,Otro',
            'plazo_compra' => 'required|string|in:Ahora,3 meses,6 meses,12 meses,Otro',
            'contacto' => 'required|string|in:Whatsapp,Email,Llamada',
            'privacy' => 'accepted'
        ]);

        // Enviar el correo con los datos del formulario
        Mail::to('ventas@capeira.com')->send(new ContactFormMail($validatedData));

        return redirect()->back()->with('success', 'Formulario enviado correctamente.');
    }
}
