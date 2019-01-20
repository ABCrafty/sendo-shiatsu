<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shiatsu;

class ShiatsuController extends Controller
{
    public function index()
    {
        $shiatsu = Shiatsu::first();

        return view('index', compact('shiatsu'));
    }

    protected function clean($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
