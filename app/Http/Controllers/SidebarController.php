<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class SidebarController extends Controller
{
    public function index()
    {
        $tests = Test::where('id', '=', 2)->first();
        return view('welcome', compact('tests'));
    }
}
