<?php

namespace App\Http\Controllers;

use App\Models\AnimalSale;
use Illuminate\Http\Request;

class AnimalSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = AnimalSale::all();
        return view('dashboard.addAnimal', compact('sales'));
    }

  public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'age' => 'required|string|max:255',
        'status' => 'required|in:Sold,Unsold',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/animals'), $imageName);
        $data['image'] = 'uploads/animals/' . $imageName;
    }

    AnimalSale::create($data);

    return redirect()->back()->with('success', 'Animal added successfully!');
}


    // Show Edit Form
public function edit($id)
{
    $animal = AnimalSale::findOrFail($id);
    return view('dashboard.editanimal', compact('animal'));
}

// Handle Update
public function update(Request $request, $id)
{
    $animal = AnimalSale::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'age' => 'required|string|max:255',
        'status' => 'required|in:Sold,Unsold',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
    ]);

    $data = $request->except('image');

    // Handle Image Update
    if ($request->hasFile('image')) {
        // Delete old image
        if ($animal->image && file_exists(public_path($animal->image))) {
            unlink(public_path($animal->image));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/animals'), $imageName);
        $data['image'] = 'uploads/animals/' . $imageName;
    }

    $animal->update($data);

    return redirect()->route('animalSales.index')->with('success', 'Animal updated successfully!');
}


    public function destroy($id)
    {
        $sale = AnimalSale::findOrFail($id);
        $sale->delete();

        return redirect()->route('animalSales.index')->with('success', 'Animal deleted successfully.');
    }

    public function allAnimals()
{
    $animals = AnimalSale::latest()->get();
    return view('adoption', compact('animals'));
}

}
