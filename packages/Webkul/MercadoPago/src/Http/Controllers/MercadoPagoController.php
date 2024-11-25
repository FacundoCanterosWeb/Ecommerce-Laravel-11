<?php

namespace App\Http\Controllers;

use MercadoPago\Preference;
use MercadoPago\Item;
use Illuminate\Http\Request;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller
{
    public function crearPreferencia(Request $request)

    {require_once base_path('packages/Webkul/MercadoPago/routes/mercadopago-routes.php');
      dd('mercadopago-routes.php cargado');
      
       echo "La concha de tu madre bagisto";
        MercadoPagoConfig::setAccessToken(env(''));

        // Crear preferencia
        $preference = new Preference();

        $items = [];
        $cartItems = $request->input('cart_items', []);

        foreach ($cartItems as $cartItem) {
            $item = new Item();
            $item->title = $cartItem['title'];
            $item->quantity = $cartItem['quantity'];
            $item->unit_price = $cartItem['unit_price'];
            $items[] = $item;
        }

        $preference->items = $items;
        $preference->save();

        // Retornar el preferenceId al frontend
        return response()->json(['preferenceId' => $preference->id]);
    }
}
