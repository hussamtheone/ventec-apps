<?php

// app/Http/Controllers/DemendController.php

namespace App\Http\Controllers;

use App\Models\Demend;
use App\Models\Transport;
use Illuminate\Http\Request;

class DemendController extends Controller
{
    public function index()
    {
        $demends = Demend::all();
        return view('demends.index', compact('demends'));
    }

    public function create()
    {
        $transports = Transport::all();
        return view('demends.create', compact('transports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_collier' => 'required|string',
            'transport_id' => 'required|integer|exists:transports,id',
            'distination' => 'required|string',
            'date' => 'required|date',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'type_collier' => 'required|string',
            'date_demande' => 'required|date',
        ]);

        Demend::create($request->all());

        return redirect()->route('demends.index')->with('success', 'Demend created successfully.');
    }

    public function show(Demend $demend)
    {
        return view('demends.show', compact('demend'));
    }

    public function edit(Demend $demend)
    {
        $transports = Transport::all();
        return view('demends.edit', compact('demend', 'transports'));
    }

    public function update(Request $request, Demend $demend)
    {
        $request->validate([
            'nom_collier' => 'required|string',
            'transport_id' => 'required|integer|exists:transports,id',
            'distination' => 'required|string',
            'date' => 'required|date',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'type_collier' => 'required|string',
            'date_demande' => 'required|date',
        ]);

        $demend->update($request->all());

        return redirect()->route('demends.index')->with('success', 'Demend updated successfully.');
    }

    public function destroy(Demend $demend)
    {
        $demend->delete();

        return redirect()->route('demends.index')->with('success', 'Demend deleted successfully.');
    }
}
