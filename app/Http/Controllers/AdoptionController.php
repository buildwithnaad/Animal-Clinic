<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'full_name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'address' => 'required|string',
                'animal_name' => 'required|string',
                'animal_price' => 'required|numeric',
            ]);

            Adoption::create($validated);

            return response()->json([
                'success' => true,
                'message' => '🎉 Adoption successful! We will contact you shortly.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.',
                'error' => $e->getMessage(), // Optional: for debugging only
            ], 500);
        }
    }
    public function index()
    {
        $adoptions = Adoption::latest()->get(); // or paginate if needed
        return view('dashboard.buyers', compact('adoptions'));
    }
    public function destroy($id)
    {
        Adoption::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Adoption entry deleted successfully.');
    }
}
