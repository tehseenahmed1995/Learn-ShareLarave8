<?php
namespace App\PaymentGateWay;
use Illuminate\Support\Facades\Facade;

class PaymentFacade extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'payment';
    }
}