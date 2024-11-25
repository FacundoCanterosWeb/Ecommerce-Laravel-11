<?php
return [
    'mercado_pago' => [
        'code'             => 'mercado_pago',
        'title'            => 'Mercado Pago',
        'description'      => 'Pago seguro con Mercado Pago',
        'class'            => 'Webkul\MercadoPago\Payment\MercadoPago',
        'sandbox'          => true,  // true para pruebas, false para producción
        'active'           => true,
        'sort'             => 4,
    ],
];
