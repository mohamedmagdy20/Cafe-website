<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $data = About::first();
        return view('dashboard.about.index',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $data = About::first();
        $data->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);

        return redirect()->back()->with('success','Success');
    }
}
