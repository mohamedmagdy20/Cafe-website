<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function index()
    {
        $data = Setting::all();
        // return $data[0]->value;
        return view('dashboard.settings.index',['data'=>$data]);
    }

    public function update(Request $request)
    {
    

        $data = Setting::all();

        $data[0]->update(['value'=>$request->website_name]);
        $data[1]->update(['value'=>$request->phone]);
        $data[2]->update(['value'=>$request->facebook]);
        $data[3]->update(['value'=>$request->twitter]);
        $data[4]->update(['value'=>$request->instegram]);

        return redirect()->back()->with('success','Updated');
    }
}
