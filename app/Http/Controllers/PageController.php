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
        $cars = Car::paginate(8);
        return view('our-cars', compact('cars'));
    }

    public function panel()
    {
        return view('panel/index');
    }
}