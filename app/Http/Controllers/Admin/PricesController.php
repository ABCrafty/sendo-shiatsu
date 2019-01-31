<?php

namespace App\Http\Controllers\Admin;

use App\Prices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricesController extends Controller
{
    public function index ()
    {
        $prices = Prices::all();
        return view('admin.prices', compact('prices'));
    }

    public function show ($id)
    {
        $price = Prices::find($id);
        return response()->json($price);
    }

    public function create (Request $request)
    {
        $price = new Prices;
        $price->title = $request->title;
        $price->center = $request->has('center');
        $price->prices = json_encode($request->price);

        $price->save();

        session()->flash('message', 'Tarif enregistré avec succès');
        return redirect()->route('admin.prices.index');
    }

    public function update (Request $request)
    {
        $price = Prices::find($request->id);
        $price->title = $request->title;
        $price->center = $request->has('center');
        $price->prices = json_encode($request->price);

        $price->save();

        session()->flash('message', 'Tarif enregistré avec succès');
        return redirect()->route('admin.prices.index');
    }

    public function destroy (Request $request)
    {
        $price = Prices::find($request->id);
        $price->delete();

        return response()->json('ok');
    }
}
