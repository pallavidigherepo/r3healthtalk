<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthParameterController extends Controller
{
    public function index()
    {
        $parameters = HealthParameter::with('subcategory')->get();
        
        $groupedParameters = $parameters->groupBy('subcategory.name')->map(function ($items) {
            return $items->pluck('name');
        });

        return response()->json($groupedParameters);
    }

}
