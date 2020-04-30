<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use DB;

class ShopController extends Controller {

    //Query builder
    private function queryBuilder($searchWords, $type, $brand, $query) {
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

        return $query;
    }

    private function createPages($old) {
        if(count($old) == 0) {
            return $new = null;
        }

        $index = 0;
        while(count($old) > 0) {
            for ($i = 0; $i < 10; $i++) {
                $new[$index][$i] = array_shift($old);
            }
            $index++;
        }

        return $new;
    }

    public function results(Request $request) {

        //Getting data from user input
        $type = $request->input('type');
        $type = (is_null($type) ? 'any' : $type);      //if job sector was not selected, show all

        $brand = $request->input('brand');
        $brand[0] = (is_null($brand) ? 'all' : $brand[0]);      //if job sector was not selected, show all

        $search = $request -> input('search');

        $search = preg_replace("/[^A-Za-z0-9]/", ',', $search); //removing special characters
        $searchWords = explode(',',  $search);

        for($i = 0; $i < count($searchWords); $i++) {
            $searchWords[$i] = "%" . $searchWords[$i] ."%";
        }

        $query = "";
        $query = $this -> queryBuilder($searchWords, $type, $brand, $query);
        $orderBy = "ORDER BY items.created_at DESC";

        $items = DB::select("SELECT * FROM items " . $query . $orderBy);
        $totalResults = count($items);
        $items = $this->createPages($items);

        //HARD CODED
        $page = 0;

        return view('shop-listings', compact('items', 'totalResults', 'page'));
    }
}
