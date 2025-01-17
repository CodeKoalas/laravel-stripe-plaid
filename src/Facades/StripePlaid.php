<?php

namespace CodeKoalas\LaravelStripePlaid\Facades;

use Illuminate\Support\Facades\Facade;

class StripePlaid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'stripe-plaid';
    }
}
