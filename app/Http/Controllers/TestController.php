<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        toast()->success('Testiranje toast poruke.')->push();
        return view ('test');
    }
}
