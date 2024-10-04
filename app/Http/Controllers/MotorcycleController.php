<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    public function index()
    {
        $motorcycles = Motorcycle::all();
        return view('motorcycles.index', compact('motorcycles'));
    }

    public function create()
    {
        return view('motorcycles.create');
    }

    public function store(Request $request)
    {
        Motorcycle::create($request->all());
        return redirect()->route('motorcycles.index');
    }

    public function edit(Motorcycle $motorcycle)
    {
        return view('motorcycles.edit', compact('motorcycle'));
    }

    public function update(Request $request, Motorcycle $motorcycle)
    {
        $motorcycle->update($request->all());
        return redirect()->route('motorcycles.index');
    }

    public function destroy(Motorcycle $motorcycle)
    {
        $motorcycle->delete();
        return redirect()->route('motorcycles.index');
    }

}
