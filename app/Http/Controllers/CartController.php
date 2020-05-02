<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Http\Request;
Use Session;
use Cartalyst\Stripe\Laravel\Facades\Stripe;


class CartController extends Controller {

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function store(Request $request)
    {
        if (!Session::has('cart')) {
            return view('e-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $total = $cart->totalPrice;

        try{
            $charge = Stripe::charges()->create([
                'amount' => $total,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [

                ],
            ]);

            return redirect()->route('confirmation');
        }catch (Exception $e){

        }
    }

    public function getConfirmation(){

            Session::forget('cart');

            return redirect()->route('home');
    }


    public function getAddToCart(Request $request, $id) {
        $item = Item::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($item, $item->id);

        $request->session()->put('cart', $cart);
        return redirect()->back();
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
        }else{
            $lastURL = '/';
        }

        return view('e-cart', ['items' => $cart->items, 'totalPrice' => $cart->totalPrice], compact('lastURL'));
    }

    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('e-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        foreach ($cart->items as $key => $cartItem) {
            $DB_item = Item::find($key);
            if ($DB_item -> in_stock < $cartItem['qty'])  {
                return view('not-available', compact('DB_item'));
            }
        }

        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }
}
