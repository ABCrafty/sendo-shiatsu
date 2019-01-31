<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prices;

class PricesController extends Controller
{
    public function index()
    {
        $prices = Prices::all();

        return view('front.prices', compact('prices'));
    }

    protected function clean($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
