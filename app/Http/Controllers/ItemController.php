<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;


class ItemController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $items = Item::latest()->get();

        return view('items.items', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'type' => 'required',
            'title' => 'required|max:255',
            'in_stock' => 'required',
            'price' => 'required',
            'brand' => 'nullable',
            'description' => 'nullable',
            'review' => 'nullable',
            'dimensions' => 'nullable',
            'processor' => 'nullable',
            'os' => 'nullable',
            'storage_capacity' => 'nullable',
            'ram' => 'nullable',
            'colour' => 'nullable',
            'camera' => 'nullable',
            'battery_capacity' => 'nullable',
            'images' => 'nullable',
        ]);

        Item::create($validatedData);

        return redirect('items')->with('success', 'New item was added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $item =  Item::whereId($id)->first();
        return view('items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'type' => 'required',
            'title' => 'required|max:255',
            'in_stock' => 'required',
            'price' => 'required',
            'brand' => 'nullable',
            'description' => 'nullable',
            'review' => 'nullable',
            'dimensions' => 'nullable',
            'processor' => 'nullable',
            'os' => 'nullable',
            'storage_capacity' => 'nullable',
            'ram' => 'nullable',
            'colour' => 'nullable',
            'camera' => 'nullable',
            'battery_capacity' => 'nullable',
            'images' => 'nullable',
        ]);

        Item::whereId($id)->update($validatedData);

        return redirect('items')->with('success', 'Item is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect('items')->with('success', 'Item is successfully deleted');
    }
}
