<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ShopController extends Controller {

    public function results(Request $request) {

        //Getting data from user input
        $type = $request->input('type');
        $type = (is_null($type) ? 'any' : $type);      //if job sector was not selected, show all

        $brand = $request->input('brand');
        $brand[0] = (is_null($brand) ? 'all' : $brand[0]);      //if job sector was not selected, show all


        $items = Item::where('type', '=', 'mobile');
        $items->get();

        dd($items);


//        dd($items);

//        if($type != 'any') {
//            $items->orWhere('type', $type);
//        }
//
//        if($brand[0] != 'all') {
//            $items->orWhere('brand', $brand[0]);
//        }
//
//        $items->paginate(4);

        return view('shop-listings', compact('items'));
    }
}
