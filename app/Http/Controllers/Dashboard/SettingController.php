<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends GeneralController
{
    //
    public $model;
    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }
    public function index()
    {
        $data = $this->model->all();
      
        return view('dashboard.settings.index',['data'=>$data]);
    }

    public function update(Request $request)
    {
    

        $data = $this->model->all();

        $data[0]->update(['value'=>$request->website_name]);
        $data[1]->update(['value'=>$request->phone]);
        $data[2]->update(['value'=>$request->facebook]);
        $data[3]->update(['value'=>$request->twitter]);
        $data[4]->update(['value'=>$request->instegram]);
        $data[5]->update(['value'=>$request->address]);
        $data[6]->update(['value'=>$request->email]);

        if($request->file('logo'))
        {
            $image = $this->updateImage($request->file('logo'),null,config('path.SETTING_PATH'));
            $data[7]->update(['value'=>$image]);
        }

        return redirect()->back()->with('success','Updated');
    }
}
