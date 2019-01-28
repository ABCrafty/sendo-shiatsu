<?php

namespace App\Http\Controllers;

use App\DoIn;

class DoInController extends Controller
{
    public function index()
    {
        $doin = DoIn::first();

        return view('front.doin', compact('doin'));
    }

    protected function clean($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
