<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;

class Bandas extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/cantores.show');
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
    public function show(Banda $banda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banda $banda)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banda $banda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banda $banda)
    {
        //
    }
}
