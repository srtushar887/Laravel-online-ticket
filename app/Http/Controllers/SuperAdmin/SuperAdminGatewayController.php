<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminGatewayController extends Controller
{
    public function payment_gateway()
    {
        return view('superadmin.gateway.PaymentGateway');
    }
}
