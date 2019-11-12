<?php

namespace GetCandy\Api\Providers;

use GetCandy\Api\Core\Taxes\Interfaces\TaxCalculatorInterface;
use GetCandy\Api\Core\Taxes\TaxCalculator;
use Illuminate\Support\ServiceProvider;

class TaxServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(TaxCalculatorInterface::class, function ($app) {
            return $app->make(TaxCalculator::class);
        });
    }
}
