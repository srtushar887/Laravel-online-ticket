<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $tickets = ticket::where('ticket_status',1)->inRandomOrder()->limit(12)->get();
        return view('frontend.index',compact('tickets'));
    }
}
