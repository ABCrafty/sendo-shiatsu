<?php

namespace App\Http\Controllers;

use App\Prestations;

class PrestationsController extends Controller
{
    public function index() {
        $prestation = Prestations::first();
        return view('front.prestations', compact('prestation'));
    }
}
