<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal;

class UserDepositController extends Controller
{
    public function deposit()
    {
        return view('user.deposit.depositMoney');
    }

    public function make_payment($id)
    {
        $g_id = $id;
        return view('user.deposit.depositAmount',compact('g_id'));
    }


    public function deposit_submit(Request $request)
    {
        $g_id = $request->gateway_id;
        $am = $request->amount;
        if ($g_id == 1){

            return redirect(route('user.pay.paypal'));
        }
    }



}
