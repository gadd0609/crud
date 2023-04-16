<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoEnviado;


class CorreoController extends Controller
{

    public function enviarCorreo(Request $request)
{
    $destinatario = $request->input('destinatario');
    $asunto = $request->input('asunto');
    $mensaje = $request->input('mensaje');

    $correo = new CorreoEnviado($mensaje);
    Mail::to($destinatario)->send($correo);

    return response()->json(['mensaje' => 'Correo electrónico enviado']);
}
    public function index()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}
