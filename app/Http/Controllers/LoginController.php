<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validar los datos recibidos usando Validator
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Si la validación falla, retorna un error 400 con los mensajes de error en JSON
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Datos inválidos o incompletos',
                'errors' => $validator->errors(),
            ], 400);
        }

        // Si la validación pasa, puedes devolver un estatus 200 y un mensaje de éxito
        return response()->json([
            'message' => 'Datos recibidos correctamente',
        ], 200);
    }
}
