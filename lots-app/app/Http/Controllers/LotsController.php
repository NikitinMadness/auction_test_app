<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Lot\StoreRequest;
use App\Http\Requests\Lot\UpdateRequest;
use App\Models\Category;
use App\Models\Lot;

class LotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lots = Lot::all();
        return view('lots.index', compact('lots'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories = Category::all();
        return view('lots.create', compact('categories'));;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Lot::firstOrCreate($data);
        return redirect()->route('lots');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lot $lot)
    {
        return view('lots.show', compact('lot'));
    }

    public function edit(Lot $lot){
        $categories = Category::all();
        return view('lots.edit', compact('lot', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Lot $lot)
    {
        $data = $request->validated();
        $lot->update($data);
        return view('lots.show', compact('lot'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Lot $lot)
    {
        $lot->delete();
        return redirect()->route('lots');
    }
}
