<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Posts;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $articles = Posts::pluck('id');

        return view('admin.dashboard',
            compact('articles'));
    }
}
