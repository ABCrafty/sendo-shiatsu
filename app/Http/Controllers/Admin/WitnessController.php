<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Witness;

class WitnessController extends Controller
{
    public function index ()
    {
        $witnesses = Witness::all();

        return view('admin.witnesses', compact('witnesses'));
    }

    public function store (Request $request)
    {

    }
}
