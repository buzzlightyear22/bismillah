<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use App\Models\Test;
use App\Models\Client;
use App\Models\Brand;

class TestController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::all();
        $tests = Test::where('id', '=', 2)->first();
        $clients = Client::all();
        $brands = Brand::all();
        return view('test', compact('katalogs', 'tests', 'clients', 'brands'));
    }
}
