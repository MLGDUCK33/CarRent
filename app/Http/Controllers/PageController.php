<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function test()
    {
        return view('test');
    }

    public function about()
    {
        return view('about');
    }

    public function cars()
    {
        $cars = Car::orderBy('id','asc')->paginate(8);
        $featured_cars = Car::where('featured',1)->take(3)->get();
        return view('our-cars', compact('cars','featured_cars'));
    }

    public function panel()
    {
        return view('panel/index');
    }
}
