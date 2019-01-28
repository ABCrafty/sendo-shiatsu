<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shiatsu;

class ShiatsuController extends Controller
{
    public function index()
    {
        $shiatsu = Shiatsu::first();

        if ($shiatsu) {
            return view('front.shiatsu', compact('shiatsu'));
        } else {
            session()->flash('warning', 'La page demandée n\'est pas encore prête, revenez plus tard.');
            return redirect('/');
        }


    }

    protected function clean($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
