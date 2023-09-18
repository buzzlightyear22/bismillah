<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use App\Models\Test;
use App\Models\Client;
use App\Models\Brand;
use App\Models\Slider;

class DashboardController extends Controller
{
    public function index(){
        $katalogs = Katalog::all();
        $tests = Test::where('id', '=', 2)->first();
        $clients = Client::all();
        $brands = Brand::all();
        $sliders = Slider::all();
        $slider1 = Slider::where('id', '=', 1)->first();
        $slider2 = Slider::where('id', '=', 2)->first();
        $slider3 = Slider::where('id', '=', 3)->first();
        $slider4 = Slider::where('id', '=', 4)->first();
        $kontruksi = Slider::where('id', '=', 5)->first();
        $retail = Slider::where('id', '=', 6)->first();
        $ecatalogue = Slider::where('id', '=', 7)->first();
        return view('dashboard', compact('katalogs', 'tests', 'clients', 'brands', 'sliders', 'slider1', 'slider2', 'slider3', 'slider4', 'kontruksi', 'retail', 'ecatalogue'));
    }
}
