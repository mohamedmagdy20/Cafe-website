<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends GeneralController
{
    //
    protected $view = 'banners.';
    protected $model;

    public function __construct(Banner $model)
    {
        parent::__construct($model);
    }
    public function index()
    {
        $data = Banner::all();
        return view('dashboard.banners.index',['data'=>$data]);
    }

    public function create()
    {
        return view('dashboard.banners.create');
    }

    public function edit($id)
    {
        $data = $this->findData($id);
        return view('dashboard.banners.edit',['data'=>$data]);
    }

    public function store(Request $request)
    {
        if($request->file('image'))
        {
           $image = $this->storeImage($request->file('image'),config('path.BANNER_PATH'));
           $this->model->create(array_merge($request->all(),['image'=>$image]));
           return redirect()->back()->with('success','Success');
        }
        return redirect()->back()->with('error','Error');
    }

    public function update(Request $request,$id)
    {
        
        $header = $this->findData($id);
        if($request->file('image'))
        {
            $image= $this->updateImage($request->image,$header->image,config('path.BANNER_PATH'));
            $header->update(array_merge($request->all(),['image'=>$image]));
            return redirect()->route('dashboard.banners.index')->with('success','Updated');            
         
        }
        $header->update($request->all());
        return redirect()->route('dashboard.banners.index')->with('success','Updated');            
         
      
    }

    public function delete($id)
    {
        $data = $this->findData($id);
        $this->updateImage(null,$data->image,config('path.BANNER_PATH'));
        $data->delete();
        return redirect()->back()->with('success','Deleted');    
    }    
}
