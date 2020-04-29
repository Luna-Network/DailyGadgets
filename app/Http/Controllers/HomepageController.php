<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class HomepageController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mobiles = Item::where('type', 'mobile')->latest()->take(4)->get();
        $laptops = Item::where('type', 'laptop')->latest()->take(4)->get();
        $tvs = Item::where('type', 'TV')->latest()->take(4)->get();

        return view('index', compact('mobiles', 'laptops', 'tvs'));
    }
}
