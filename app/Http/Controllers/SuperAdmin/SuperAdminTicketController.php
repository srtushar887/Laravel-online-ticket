<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class SuperAdminTicketController extends Controller
{
    public function ticket_management()
    {
        return view('superadmin.ticket.ticketManagement');
    }


    public function ticket_get(Request $request)
    {
        $all_ticket = DB::table('tickets')->get();
        return DataTables::of($all_ticket)
            ->addColumn('action',function ($all_course){
               })
            ->editColumn('created_at',function ($all_goal){
                return Carbon::parse($all_goal->created_at)->format('Y-m-d');
            })
            ->make(true);
    }


    public function ticket_save(Request $request)
    {
        $num = $request->num_of_ticket;

        for ($i=0;$i<$num;$i++){
            ticket::create([
               'ticket_number' => Str::random(5).time().uniqid(),
               'ticket_price' => $request->ticket_price,
               'ticket_exp_date' => $request->ticket_exp_date,
               'ticket_status' => 0,
               'is_buy' => 0,
            ]);
        }

        return back()->with('success','Ticket Successfully Created');



    }


}
