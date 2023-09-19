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
        $tests = Test::where('id', '=', 1)->first();
        if($tests) {
            $tests = $tests->image;
        } else {
            $tests = '';
        }
        $clients = Client::all();
        $brands = Brand::all();
        $sliders = Slider::all();
        $data = ([
            'tests' => $tests,
            'katalogs' => $katalogs,
            'clients' => $clients,
            'brands' => $brands,
            'sliders' => $sliders,
        ]);
        return view('test', $data);
    }
}
