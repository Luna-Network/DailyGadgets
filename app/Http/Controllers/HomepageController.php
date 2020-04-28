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
        $items = Item::all();
        return view('index', compact('items'));
    }
}
