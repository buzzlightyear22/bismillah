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
        if($tests) {
            $tests = $tests->image;
        } else {
            $tests = '';
        }
        $clients = Client::all();
        $brands = Brand::all();
        $sliders = Slider::all();

        $slider1 = Slider::where('id', '=', 1)->first();
        if($slider1) {
            $slider1 = $slider1->image;
        } else {
            $slider1 = '';
        }

        $slider2 = Slider::where('id', '=', 2)->first();
        if($slider2) {
            $slider2 = $slider2->image;
        } else {
            $slider2 = '';
        }

        $slider3 = Slider::where('id', '=', 3)->first();
        if($slider3) {
            $slider3 = $slider3->image;
        } else {
            $slider3 = '';
        }

        $slider4 = Slider::where('id', '=', 4)->first();
        if($slider4) {
            $slider4 = $slider4->image;
        } else {
            $slider4 = '';
        }

        $kontruksi = Slider::where('id', '=', 7)->first();
        if($kontruksi) {
            $kontruksi = $kontruksi->image;
        } else {
            $kontruksi = '';
        }

        $retail = Slider::where('id', '=', 6)->first();
        if($retail) {
            $retail = $retail->image;
        } else {
            $retail = '';
        }

        $ecatalogue = Slider::where('id', '=', 5)->first();
        if($ecatalogue) {
            $ecatalogue = $ecatalogue->image;
        } else {
            $ecatalogue = '';
        }

        $data = ([
            'tests' => $tests,
            'katalogs' => $katalogs,
            'clients' => $clients,
            'brands' => $brands,
            'sliders' => $sliders,
            'slider1' => $slider1,
            'slider2' => $slider2,
            'slider3' => $slider3,
            'slider4' => $slider4,
            'kontruksi' => $kontruksi,
            'retail' => $retail,
            'ecatalogue' => $ecatalogue,
        ]);
        return view('dashboard', $data);
    }
}
