<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;

class DoInController extends Controller
{
    public function index()
    {
        $homepage = Homepage::first();

        return view('index', compact('homepage'));
    }

    protected function clean($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
