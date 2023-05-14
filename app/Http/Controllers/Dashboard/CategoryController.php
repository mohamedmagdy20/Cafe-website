<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\Category\StoreCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends GeneralController
{
    //
    protected $view = 'category.';
    protected $model;

    public function __construct(Category $model)
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
        $data = $this->findData($id);
        return view($this->viewPath($this->view.'edit'),['data'=>$data]);
    }

    public function create()
    {
        return view($this->viewPath($this->view.'create'));
    }

    public function store(StoreCategory $request)
    {
        $data = $request->validated();
        $this->model->create($data);
        return redirect()->route('dashboard.category.index')->with('success','Added');
    }


    public function update(StoreCategory $request,$id)
    {
        $data = $request->validated();
        // $this->model->create($data);
        $cate = $this->findData($id);
        $cate->update($data);
        return redirect()->route('dashboard.category.index')->with('success','Updated');
    }


    public function delete($id)
    {
        $this->model->findOrFail($id)->delete();
        return redirect()->route('dashboard.category.index')->with('success','Deleted');
    }


}
