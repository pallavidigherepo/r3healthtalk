<?php

namespace App\Http\Controllers;

use App\Models\HealthScore;
use Illuminate\Http\Request;

class HealthScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'age' => 'nullable|integer',
            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'mentor' => 'nullable|string|max:255',
            'wellness' => 'required|array',
            'symptoms' => 'required|array',
        ]);

        $healthScore = HealthScore::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'mentor' => $request->mentor,
            'wellness' => $request->wellness,
            'symptoms' => $request->symptoms,
        ]);

        return response()->json(['message' => 'Health Score stored successfully!', 'data' => $healthScore], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(HealthScore $healthScore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HealthScore $healthScore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HealthScore $healthScore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HealthScore $healthScore)
    {
        //
    }
}
