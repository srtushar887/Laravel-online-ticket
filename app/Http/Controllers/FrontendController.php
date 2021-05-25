<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $ticket_count = ticket::where('is_buy',0)->count();
        return view('frontend.index',compact('ticket_count'));
    }
}
