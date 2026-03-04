<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telpa;

class TelpasController extends Controller
{
    /**
     * Display a listing of the telpas.
     */
    public function index()
    {
        $items = Telpa::orderBy('ID', 'asc')->get();
        return view('telpas.index', ['data' => $items]);
    }

    /**
     * Show the form for creating a new telpa.
     */
    public function create()
    {
        return view('telpas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nosaukums' => 'required|max:45',
        ]);

        $data = new Telpa;
        $data->fill($validated);
        $data->save();

        return redirect('/telpas')->with('success', 'Dati veiksmīgi saglabāti');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Telpa::findOrFail($id);
        return view('telpas.details', ['data' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Telpa::findOrFail($id);
        return view('telpas.edit', ['data' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nosaukums' => 'required|max:45',
        ]);

        $data = Telpa::findOrFail($id);
        $data->fill($validated);
        $data->save();

        return redirect('/telpas')->with('success', 'Dati veiksmīgi atjaunoti');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Telpa::findOrFail($id)->delete();
        return redirect('/telpas')->with('success', 'Dati veiksmīgi izdzēsti');
    }
}
