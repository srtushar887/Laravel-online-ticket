<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ticket;
use App\Models\User;
use App\Models\user_ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class UserTicketController extends Controller
{
    public function buy_ticket()
    {
        return view('user.ticket.buyTicket');
    }

    public function ticket_get(Request $request)
    {
        $all_ticket = DB::table('tickets')
            ->where('is_buy',0)
            ->get();
        return DataTables::of($all_ticket)
            ->addColumn('action',function ($all_ticket){
                return ' <button id="'.$all_ticket->id .'" onclick="shop(this.id)" class="btn btn-success btn-info btn-sm" data-toggle="modal" data-target="#shop"><i class="fas fa-shopping-cart"></i> </button>';
            })
            ->editColumn('created_at',function ($all_goal){
                return Carbon::parse($all_goal->created_at)->format('Y-m-d');
            })
            ->make(true);
    }


    public function buy_ticket_save(Request $request)
    {
        $ticket = ticket::where('id',$request->ticket_id)->first();
        $ticket->is_buy = 1;
        $ticket->save();

        $user_ticket = new user_ticket();
        $user_ticket->user_id = Auth::user()->id;
        $user_ticket->ticket_id = $ticket->id;
        $user_ticket->ticket_exp_date = Carbon::now()->addDays($ticket->ticket_exp_date);
        $user_ticket->status = 0;
        $user_ticket->save();

        $user = User::where('id',Auth::user()->id)->first();
        $user->balance = $user->balance - $ticket->ticket_price;
        $user->save();

        return back()->with('success','Ticket Successfully Bought');


    }


}
