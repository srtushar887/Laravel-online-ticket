<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\general_setting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin.index');
    }

    public function general_setting()
    {
        $gen = general_setting::first();
        return view('superadmin.page.generalSetting',compact('gen'));
    }

    public function general_setting_update(Request $request)
    {
        $gen_update = general_setting::first();
        if($request->hasFile('logo')){
            @unlink($gen_update->logo);
            $image = $request->file('logo');
            $imageName = time().uniqid().'.'."png";
            $directory = 'assets/admin/images/logo/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $gen_update->logo = $imgUrl;
        }
        if($request->hasFile('icon')){
            @unlink($gen_update->icon);
            $image = $request->file('icon');
            $imageName = time().uniqid().'.'."png";
            $directory = 'assets/admin/images/logo/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $gen_update->icon = $imgUrl;
        }


        $gen_update->site_name = $request->site_name;
        $gen_update->site_email = $request->site_email;
        $gen_update->site_phone = $request->site_phone;
        $gen_update->site_currency = $request->site_currency;
        $gen_update->site_address = $request->site_address;
        $gen_update->save();

        return back()->with('success','General Setting Successfully Updated');


    }


}
