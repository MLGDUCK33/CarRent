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

    public function about()
    {
        return view('about');
    }

    public function cars()
    {
        return view('our-cars');
    }

    public function panel()
    {
        return view('panel/index');
    }
}
