<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Wishlist;

class WishlistController extends Controller {
    public function getAddToWish($id) {
        $user = Auth::user();

        $exists = DB::select('SELECT * FROM wishlists where wishlists.item_id = ' . $id . ' AND wishlists.user_id = ' . $user->id);

        if(empty($exists)) {
            Wishlist::create(['user_id'=>$user->id, 'item_id'=>$id]);
        }

        return redirect()->back();
    }
}
