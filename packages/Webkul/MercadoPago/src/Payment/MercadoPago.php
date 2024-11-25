<?php

namespace Webkul\MercadoPago\Payment;

use Webkul\Payment\Payment\Payment;

class MercadoPago extends Payment
{
    protected $code = 'mercado_pago';

    public function getRedirectUrl()
    {
        // Lógica para redireccionar a Mercado Pago
        redirect(url('https://www.mercadopago.com/'));
    }
}
