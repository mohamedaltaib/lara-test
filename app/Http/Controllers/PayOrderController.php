<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;

use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(PaymentGateway $pw) {

        dd( $pw->charge(3500));
    }
}