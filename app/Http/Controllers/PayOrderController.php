<?php

namespace App\Http\Controllers;

use App\Orders\OrderDetails;
use Illuminate\Http\Request;
use App\Billing\PaymentGatewayContract;

class PayOrderController extends Controller
{
    //laravel create reflection of class object, we need to ask for it
    // PaymentGateway need currency, but we can pass it directly so we use service provider for that purpose
    public function store(OrderDetails $orderDetails,PaymentGatewayContract $patmentGateway)
    {
        $order = $orderDetails->all();
        dd($patmentGateway->charge(2500));
    }
}
