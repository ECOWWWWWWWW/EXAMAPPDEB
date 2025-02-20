<?php

namespace App\Http\Controllers;

use App\Models\Homeowner;
use Illuminate\Http\Request;

class HomeownerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:homeowners,email',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $homeowner = Homeowner::create($validated);

        return response()->json($homeowner, 201);
    }

    public function index()
    {
        $homeowners = Homeowner::all();
        return response()->json($homeowners);
    }

    public function show($id)
    {
        $homeowner = Homeowner::findOrFail($id);
        return response()->json($homeowner);
    }


    public function update(Request $request, $id)
    {
        $homeowner = Homeowner::findOrFail($id);

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:homeowners,email,' . $id,
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $homeowner->update($validated);

        return response()->json($homeowner);
    }

    public function destroy($id)
    {
        $homeowner = Homeowner::findOrFail($id);
        $homeowner->delete();

        return response()->json(['message' => 'Homeowner deleted successfully']);
    }
}
