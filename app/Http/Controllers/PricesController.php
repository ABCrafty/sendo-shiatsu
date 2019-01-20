<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prices;

class PricesController extends Controller
{
    public function index()
    {
        $prices = Prices::first();

        return view('index', compact('prices'));
    }

    protected function clean($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
