<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestationsController extends Controller
{
    public function index() {
        return view('front.prestations');
    }
}
