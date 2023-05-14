<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        $menu = Menu::all()->take(8);
        return view('website.index',['data'=>$menu]);
    }

    public function menu()
    {
        $data  = Category::with('menu')->get();
        // return $data;
        return view('website.menu',['data'=>$data]);
    }
}
