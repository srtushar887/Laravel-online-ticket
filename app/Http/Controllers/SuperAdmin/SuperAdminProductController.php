<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\product_ticket;
use App\Models\ticket;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class SuperAdminProductController extends Controller
{
    public function product_management()
    {
        return view('superadmin.product.productList');
    }


    public function product_get(Request $request)
    {
        $all_product = product::all();
        return DataTables::of($all_product)
            ->addColumn('action',function ($all_product){
                return ' <a href="'.route('superadmin.product.edit',$all_product->id).'"><button class="btn btn-success btn-sm" ><i class="fas fa-edit"></i> </button></a>
                         <button class="btn btn-danger btn-sm" id="'.$all_product->id .'" onclick="productdelete(this.id)" data-toggle="modal" data-target="#productdelete"><i class="fas fa-trash"></i> </button>';
            })
            ->editColumn('created_at',function ($all_product){
                return Carbon::parse($all_product->created_at)->format('Y-m-d');
            })
            ->make(true);
    }


    public function product_create()
    {
        $ticket_count = ticket::where('ticket_status',0)->count();
        return view('superadmin.product.productCreate',compact('ticket_count'));
    }


    public function product_save(Request $request)
    {
        if ($request->use_ticket > $request->avaible_ticket){
            return back()->with('alert','Ticket not available. Please create new ticket');
        }else{
            $new_product = new product();
            if($request->hasFile('product_image')){
                $image = $request->file('product_image');
                $imageName = time().uniqid().'.'."jpeg";
                $directory = 'assets/admin/images/product/';
                $imgUrl  = $directory.$imageName;
                Image::make($image)->save($imgUrl);
                $new_product->product_image = $imgUrl;
            }

            $new_product->product_name = $request->product_name;
            $new_product->product_model = $request->product_model;
            $new_product->product_sr_no = $request->product_sr_no;
            $new_product->product_status = $request->product_status;
            $new_product->save();

            $tickets = ticket::where('ticket_status',0)->inRandomOrder()->limit($request->use_ticket)->get();

            for ($i=0;$i<count($tickets);$i++){

                $update_status = ticket::where('id',$tickets[$i]['id'])->first();
                $update_status->ticket_status = 1;
                $update_status->save();

                product_ticket::create([
                   'product_id'=>$new_product->id,
                   'ticket_id'=>$tickets[$i]['id'],
                ]);
            }

            return back()->with('success','Product Successfully Created');
        }

    }


    public function product_edit($id)
    {
        $product = product::where('id',$id)->first();
        $ticket_count_used = product_ticket::where('product_id',$id)->count();
        return view('superadmin.product.productEdit',compact('ticket_count_used','product'));
    }

    public function product_update(Request $request)
    {
        $update_product = product::where('id',$request->product_edit)->first();
        if($request->hasFile('product_image')){
            @unlink($update_product->product_image);
            $image = $request->file('product_image');
            $imageName = time().uniqid().'.'."jpeg";
            $directory = 'assets/admin/images/product/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $update_product->product_image = $imgUrl;
        }

        $update_product->product_name = $request->product_name;
        $update_product->product_model = $request->product_model;
        $update_product->product_sr_no = $request->product_sr_no;
        $update_product->product_status = $request->product_status;
        $update_product->save();
        return back()->with('success','Product Successfully Updated');
    }


    public function product_delete(Request $request)
    {
        $product = product::where('id',$request->product_del)->first();

        product_ticket::where('product_id',$request->product_del)->delete();
        @unlink($product->product_image);
        $product->delete();
        return back()->with('success','Product Successfully Deleted');
    }





}
