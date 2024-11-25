<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MercadoPagoController;

Route::middleware('web')->group(function () {
    Route::post('/mercadopago/preferencia', [MercadoPagoController::class, 'crearPreferencia']);
});
