<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function pay_paypal()
    {
        return view('user.gateway.paypal');
    }

    public function Paypal_success()
    {

    }

    public function Paypal_cancel()
    {

    }


}
