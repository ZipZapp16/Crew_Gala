<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Controllers\AuthController;

// Aquí defines las rutas de la API. Estas rutas automáticamente llevan el prefijo '/api'.

// Ruta para manejar el webhook de Stripe
Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook']);

Route::post('login', [AuthController::class, 'login']);