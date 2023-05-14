<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\Menu\StoreMenu;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends GeneralController
{
    //
    protected $view = 'menu.';
    protected $model;

    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }


    public function index()
    {
        $data = $this->getData();
        return view($this->viewPath($this->view.'index'),['data'=>$data]);
    }

    public function edit($id)
    {
        $cats = Category::all();

        $data = $this->findData($id);
        return view($this->viewPath($this->view.'edit'),compact('cats','data'));
    }

    public function create()
    {
        $data = Category::all();
        return view($this->viewPath($this->view.'create'),['data'=>$data]);
    }

    public function store(StoreMenu $request)
    {
        $data = $request->validated();
        if($request->file('image'))
        {
            $data['image'] = $this->storeImage($data['image'],config('path.MENU_PATH'));
        }

        $this->model->create($data);
        return redirect()->route('dashboard.menu.create')->with('success','Added');
    }


    public function update(StoreMenu $request,$id)
    {
        $data = $request->validated();
        $cate = $this->findData($id);
        if($request->file('image'))
        {
            $data['image'] = $this->updateImage($data['image'],$cate->image,config('path.MENU_PATH'));
        }
        $cate->update($data);
        return redirect()->route('dashboard.menu.index')->with('success','Added');
    }


    public function delete($id)
    {
        $this->model->findOrFail($id)->delete();
        return redirect()->route('dashboard.menu.index')->with('success','Deleted');
    }

}
