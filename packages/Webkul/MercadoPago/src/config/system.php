<?php

return [
    [
        'key'    => 'sales.payment_methods.mercadopago',
        'name'   => 'Mercado Pago',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'admin::app.admin.system.title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
                'info'          => '', // Añade esta línea para evitar el error
            ], 
            [
                'name'          => 'description',
                'title'         => 'admin::app.admin.system.description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
                'info'          => '', // Añade esta línea para evitar el error
            ], 
            [
                'name'          => 'active',
                'title'         => 'admin::app.admin.system.status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
                'info'          => '', // Añade esta línea para evitar el error
            ],
            [
                'name'          => 'public_key',
                'title'         => 'Public Key',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
                'info'          => '', // Añade esta línea para evitar el error
            ],
            [
                'name'          => 'access_token',
                'title'         => 'Access Token',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
                'info'          => '', // Añade esta línea para evitar el error
            ]
        ]
    ]
];
