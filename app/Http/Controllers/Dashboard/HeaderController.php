<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\Header\StoreHeader;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends GeneralController
{
    //
    
    protected $view = 'headers.';
    protected $model;

    public function __construct(Header $model)
    {
        parent::__construct($model);
    }
    public function index()
    {
        $data = Header::all();
        return view('dashboard.header.index',['data'=>$data]);
    }

    public function create()
    {
        return view('dashboard.header.create');
    }

    public function edit($id)
    {
        $data = Header::findOrFail($id);
        return view('dashboard.header.edit',['data'=>$data]);
    }

    public function store(StoreHeader $request)
    {
        $data = $request->validated();

        if($request->file('image'))
        {
            $data['image'] = $this->storeImage($data['image'],config('path.HEADER_PATH'));
        }
        $this->model->create($data);
        return redirect()->back()->with('success','Added');    
    }

    public function update(StoreHeader $request,$id)
    {
        $data = $request->validated();
        $header = $this->findData($id);
        if($request->file('image'))
        {
            $data['image'] = $this->updateImage($data['image'],$header->image,config('path.HEADER_PATH'));
        }
        $header->update($data);
        return redirect()->route('dashboard.headers.index')->with('success','Updated');            
    }


    public function delete($id)
    {
        $data = $this->findData($id);
        $this->updateImage(null,$data->image,config('path.HEADER_PATH'));
        $data->delete();
        return redirect()->back()->with('success','Deleted');    
    }
}
