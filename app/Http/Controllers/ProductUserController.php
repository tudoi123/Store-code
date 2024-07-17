<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productUser = Product::orderBy('created_at', 'DESC')->get();

        return view('productUser.index', compact('productUser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productUser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('productUser.index')->with('success', 'ProductUser added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productUser = Product::findOrFail($id);

        return view('productuser.show', compact('productUser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productUser = Product::findOrFail($id);
        return view('productUser.edit', compact('productUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productUser = Product::findOrFail($id);

        $productUser->update($request->all());

        return redirect()->route('productUser.index')->with('success', 'ProductUser update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productUser = Product::findOrFail($id);

        $productUser->delete();

        return redirect()->route('productUser.index')->with('success', 'ProductUser delete successfully');
    }
}
