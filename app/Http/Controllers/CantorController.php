<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cantor;
use App\Models\Banda;

class CantorController extends Controller
{
    public function index() {
        return view('cantores.index', ['cantors' => Cantor::all()]);
    }
    public function create()
    {
        return view('cantores.create', ['banda' => Banda::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cantor::create($request->all());
        return redirect(route('cantor.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Cantor $cantor)
    {
        return view('cantores.show', ['cantor' => $cantor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cantor $cantor)
    {
       return view('cantores.edit',['cantor' => $cantor, 'bandas' => Banda::all()]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cantor $cantor)
    {
        $cantor->update($request->all());
        return redirect(route('cantor.show', $cantor->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cantor $cantor)
    {
        $cantor->delete();
        return redirect(route('cantor.index'));
    }
}
