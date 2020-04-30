<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Cart;
use Session;

class ItemController extends Controller {
    public function index() {
        return view('item-inside');
    }

    public function getAddToCart(Request $request, $id) {
        $item = Item::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($item, $item->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('home');
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('item.shoppingCart');
    }

    public function getIncreaseByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('item.shoppingCart');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('item.shoppingCart');
    }


    public function getCart() {
        if (!Session::has('cart')) {
            return view('e-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        //HARDCODED FOR TESTING. FOR NOW IT WORKS
        if(substr(redirect()->back()->getTargetUrl(), -13) != "shopping-cart") {
            $lastURL = redirect()->back()->getTargetUrl();
        } else {
            $lastURL = "/";
        }

        return view('e-cart', ['items' => $cart->items, 'totalPrice' => $cart->totalPrice], compact($lastURL));
    }

    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('e-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

}
