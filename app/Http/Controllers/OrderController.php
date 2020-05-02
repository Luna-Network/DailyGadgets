<?php

namespace App\Http\Controllers;

use App\Order;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {
    public function userOrders() {
        $user = Auth::user();
        $orders = Order::where('user_id',  $user->id)->get();

        for($i=0; $i < count($orders); $i++) {
            $items[$i] = Item::whereId($orders[$i]->item_id)->first();
        }

        return view('my-orders', compact('items', 'orders'));
    }
}
