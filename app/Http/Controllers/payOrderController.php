<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;

use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store() {
        
        $paymentGateway = new PaymentGateway();

 
    }
}