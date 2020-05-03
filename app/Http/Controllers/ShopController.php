<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use DB;

class ShopController extends Controller {

    //Query builder
    private function queryBuilder($searchWords, $type, $brand, $price, $query) {
        $used = false;

        //Build search query
        if ($searchWords[0] != "%%") {
            if ($used) {
                $query .= "AND (";
            } else {
                $query .= "WHERE (";
            }

            for ($i = 0; $i < count($searchWords); $i++) {
                if ($searchWords[$i] == "%%") {     //to remove extra spacing
                    continue;
                }

                if ($i > 0) {
                    $query .= ' OR ';
                }

                $query .= "items.title LIKE '$searchWords[$i]' OR items.title LIKE '$searchWords[$i]' OR items.brand LIKE '$searchWords[$i]' OR items.type LIKE '$searchWords[$i]' OR items.colour LIKE '$searchWords[$i]' OR items.os LIKE '$searchWords[$i]'";
            }

            $query .= ") ";
            $used = true;
        }

        //Building query for item type
        if($type != 'any') {
            if($used) {
                $query .= "AND (items.type = ";
            }
            else {
                $query .= "WHERE (items.type = ";
            }

            $query .= "'$type') ";
            $used = true;
        }

        //Building query for item brand
        if($brand[0] != 'all') {
            if($used) {
                $query .= "AND (";
            }
            else {
                $query .= "WHERE (";
            }
            for ($i = 0; $i < count($brand); $i++) {
                if($i != 0) {
                    $query .= ' OR ';
                }
                $query .= "items.brand = '$brand[$i]'";
            }
            $query .= ") ";
            $used = true;
        }

        //Building query to show price limit
        if($price > 0) {
            if($used) {
                $query .= "AND items.price <= '$price' ";
            }
            else {
                $query .= "WHERE items.price <= '$price' ";
            }
            $used = true;
        }

        return $query;
    }

    private function createPages($old) {
        if(count($old) == 0) {
            return $new = null;
        }

        $index = 0;
        while(count($old) > 0) {
            for ($i = 0; $i < 12; $i++) {
                $new[$index][$i] = array_shift($old);
            }
            $index++;
        }

        return $new;
    }

    public function results(Request $request) {

        //Getting data from user input
        $type = $request->input('type');
        $type = (is_null($type) ? 'any' : $type);               //if item type was not selected, show all

        $brand = $request->input('brand');
        $brand[0] = (is_null($brand) ? 'all' : $brand[0]);      //if item brand was not selected, show all

        $price = $request->input('price');
        $price = (is_null($price) ? 0 : $price);                //if maximum price was not selected, show all

        $search = $request -> input('search');
        $search = preg_replace("/[^A-Za-z0-9]/", ',', $search); //removing special characters
        $searchWords = explode(',',  $search);

        $page = $request -> input('page');                  //getting page current page index
        $page = (is_null($page) ? 0 : $page);

        //Surround each input word with %
        for($i = 0; $i < count($searchWords); $i++) {
            $searchWords[$i] = "%" . $searchWords[$i] ."%";
        }

        $query = "";
        $query = $this -> queryBuilder($searchWords, $type, $brand, $price, $query);
        $orderBy = "ORDER BY items.created_at DESC";

        //Building a query
        $items = DB::select("SELECT * FROM items " . $query . $orderBy);
        $totalResults = count($items);
        $items = $this->createPages($items);

        return view('shop-listings', compact('items', 'totalResults', 'page'));
    }

    public function show($id){
        $item = Item::where('id', $id)->firstOrFail();

        $imagesArray = explode(';', $item['images']);
        $imagesArray = array_filter($imagesArray);

        return view('item-inside', compact('item', 'imagesArray'));
    }
}
