<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::all();
        $tests = Test::where('id', '=', 1)->first();
        return view('test', compact('katalogs', 'tests'));
    }
}
