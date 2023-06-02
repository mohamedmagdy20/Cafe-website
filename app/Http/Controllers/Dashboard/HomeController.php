<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Shetabit\Visitor\Traits\Visitable;

class HomeController extends Controller
{
    //
    public function index()
    {
        $visit =  DB::table('shetabit_visits')->count();
        $meals = Menu::count();
        $cats = Category::count();
        return view('dashboard.index',['vists'=>$visit,'meal'=>$meals,'cats'=>$cats]);
    }
}
