<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Wishlist;
use App\Item;

class WishlistController extends Controller {
    public function getAddToWish($id) {
        $user = Auth::user();

        $exists = DB::select('SELECT * FROM wishlists WHERE wishlists.item_id = ' . $id . ' AND wishlists.user_id = ' . $user->id);

        if(empty($exists)) {
            Wishlist::create(['user_id'=>$user->id, 'item_id'=>$id]);
        }

        return redirect()->back();
    }

    public function getRemoveFromWish($id) {
        $user = Auth::user();

        $item = DB::select('SELECT * FROM wishlists WHERE wishlists.item_id = ' . $id . ' AND wishlists.user_id = ' . $user->id);

        Wishlist::whereId($item[0]->id)->delete();

        return redirect()->back();
    }

    public function getWishlist() {
        $user = Auth::user();

        $items = DB::select('SELECT * FROM wishlists WHERE wishlists.user_id = ' . $user->id);

        //Change each item_id with that item from items table. Sounds weird but it makes sense, I promise.
        for($i=0 ; $i < count($items); $i++) {
            $items[$i] = Item::where('id', '=', $items[$i]->item_id)->first();
        }

        //HARDCODED FOR TESTING. FOR NOW IT WORKS
        if(substr(redirect()->back()->getTargetUrl(), -8) != "wishlist") {
            $lastURL = redirect()->back()->getTargetUrl();
        } else{
            $lastURL = '/';
        }

        return view ('wish-list', compact('items', 'lastURL'));
    }
}
