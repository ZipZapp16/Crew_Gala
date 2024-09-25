<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Webhook;
use Stripe\WebhookSignature;

class StripeWebhookController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    // public function handleWebhook(Request $request)
    // {
    //     $endpoint_secret = config('services.stripe.webhook_secret');
    //     $payload = $request->getContent();
    //     $sig_header = $request->header('Stripe-Signature');

    //     try {
    //         $event = Webhook::constructEvent(
    //             $payload, $sig_header, $endpoint_secret
    //         );

    //         // Maneja el evento
    //         switch ($event->type) {
    //             case 'invoice.payment_succeeded':
    //                 // Maneja el evento de pago exitoso
    //                 $invoice = $event->data->object; // Contiene detalles de la factura
    //                 // Lógica para actualizar tu base de datos o enviar notificaciones
    //                 break;

    //             case 'invoice.payment_failed':
    //                 // Maneja el evento de pago fallido
    //                 $invoice = $event->data->object; // Contiene detalles de la factura
    //                 // Lógica para manejar el pago fallido
    //                 break;

    //             // Maneja otros eventos según sea necesario

    //             default:
    //                 // Evento desconocido
    //                 return response()->json(['status' => 'success']);
    //         }

    //         return response()->json(['status' => 'success']);
    //     } catch (\UnexpectedValueException $e) {
    //         // Payload inválido
    //         return response()->json(['status' => 'error', 'message' => 'Invalid payload'], 400);
    //     } catch (WebhookSignature $e) {
    //         // Firma inválida
    //         return response()->json(['status' => 'error', 'message' => 'Invalid signature'], 400);
    //     }
    // }
    public function handleWebhook(Request $request)
    {
        // Lógica para manejar el webhook
        return response()->json(['message' => 'Webhook recibido'], 200);
    }
}
