<?php
namespace Webkul\MercadoPago\Providers;

use Illuminate\Support\ServiceProvider;

class MercadoPagoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/paymentmethods.php',
            'payment_methods'
        );        

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/system.php',
            'core'
        );
    }
}
