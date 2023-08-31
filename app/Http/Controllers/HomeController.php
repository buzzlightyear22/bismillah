<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use App\Models\Test;
use App\Models\Client;
use App\Models\Brand;
use App\Models\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $katalogs = Katalog::all();
        $tests = Test::where('id', '=', 2)->first();
        $clients = Client::all();
        $brands = Brand::all();
        $sliders = Slider::all();
        return view('test', compact('katalogs', 'tests', 'clients', 'brands', 'sliders'));
    }
}
