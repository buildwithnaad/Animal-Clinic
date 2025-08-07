<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'full_name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'address' => 'required|string',
        'animal_name' => 'required|string',
        'animal_price' => 'required|numeric',
    ]);

    Adoption::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'animal_name' => $request->animal_name,
        'animal_price' => $request->animal_price,
    ]);

    return response()->json([
        'success' => true,
        'message' => '🎉 Adoption successful! We will contact you shortly.'
    ]);
}
}
