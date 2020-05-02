<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller {

    public function getAccount() {
        $user = Auth::user();

        return view('account', compact('user'));
    }

    public function postAccount(Request $request) {
        Auth::user()->update($request->all());

        return redirect()->route('getAccount');
    }

}