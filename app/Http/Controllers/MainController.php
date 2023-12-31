<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Listname;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listnames = Listname::all();
        // return $listnames[0]->items;
        $categories = Category::all();

        $showHiddenView = false;
        return view("main", compact("listnames", "categories", "showHiddenView"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" =>'required',
            "note" =>'required',
            "image" =>'required',
        ]);


        $new_item = new Item();
        $new_item->name = $request->input("name");
        $new_item->note = $request->input("note");
        $new_item->image = $request->input("image");
        $new_item->category_id = $request->input("category");


        $new_item->save();
        
        return redirect()->route('main.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
