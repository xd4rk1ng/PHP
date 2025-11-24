<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HelloWorldController extends Controller
{
    public function index() : View
    {
        $helloWorld = "Hello World";
        return view('helloWorld.index', ['helloWorld' => $helloWorld]);
    }
}
