<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Header;
use App\Models\Menu;
use Illuminate\Http\Request;
use Shetabit\Visitor\Traits\Visitable;
class WebsiteController extends Controller
{
    public function __construct()
    {
        visitor()->visit(); 
    }
    public function index()
    {
        $menu = Menu::all()->take(8);
        $header = Header::all();
        // return $about;
        $banners = Banner::all();
        $category = Category::all();
        return view('website.index',['cats'=>$category,'data'=>$menu,'header'=>$header,'banners'=>$banners]);
    }

    public function menu()
    {
        $cats  = Category::with('menu')->get();
        $data = Menu::all();

        return view('website.menu',['data'=>$data,'cats'=>$cats]);
    }
}
