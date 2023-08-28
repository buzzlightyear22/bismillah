<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use App\Models\Test;
use App\Models\Client;
use App\Models\Brand;
use App\Models\Slider;

class TestController extends Controller
{
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
