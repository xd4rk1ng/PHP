<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatatasController extends Controller
{
    public function cenouras()
    {
        $name = "Rui Santos";
        return view ("peras.name", ['name' => $name]);
    }
}
