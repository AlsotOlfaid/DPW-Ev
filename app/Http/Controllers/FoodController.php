<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foods;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Foods::all();

        // Pass the products data to the view
        return view('foods_view', compact('foods'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $food = Foods::find($id);

        return view('details', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $food = Foods::find($id);

        return view('edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Foods::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Frutas,Carnes,Panaderia,Lacteos,Verduras,Granos,Frutos Secos,Proteinas,Snacks,Condimentos,Endulzantes,Embutidos,Pastas',
            'price' => 'required|numeric|min:0',
            'organic'=> 'required|boolean',
            'gluten_free'=>'required|boolean',
            'expiration_date'=>'required|date',
        ]);

        $food->update([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'organic'=>$request->organic,
            'gluten_free'=>$request->gluten_free,
            'expiration_date'=>$request->expiration_date,
        ]);

        return redirect()->route('foods.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Foods::find($id);
        $food->delete();

        return redirect()->route('foods.index');
    }
}
