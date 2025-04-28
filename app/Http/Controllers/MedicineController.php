<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicineController extends Controller
{
    public function index(Request $request)
{
    $suppliers = Supplier::all(); // 👈 Fetch all suppliers

    $query = Medicine::with('supplier');

    if ($request->supplier_id) {
        $query->where('supplier_id', $request->supplier_id); // 👈 Filter if selected
    }

    $medicines = $query->orderBy('created_at', 'desc')->get();

    return view('medicines.index', compact('medicines', 'suppliers')); // 👈 Pass both
}

    public function create()
    {
        $suppliers = Supplier::all();
        return view('medicines.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'nullable',
            'description' => 'nullable',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'expiry_date' => 'required|date',
            'supplier_id' => 'required|exists:suppliers,id', // Validate supplier
        ]);

        Medicine::create([
            'name' => $validated['name'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'expiry_date' => $validated['expiry_date'],
            'supplier_id' => $validated['supplier_id'],
            'created_by' => Auth::id(), // Automatically saves logged in user's id
        ]);

        return redirect()->route('medicines.index')->with('success', 'Medicine added successfully.');
    }

    public function edit(Medicine $medicine)
    {
        $suppliers = Supplier::all();
        return view('medicines.edit', compact('medicine', 'suppliers'));
    }

    public function update(Request $request, Medicine $medicine)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'nullable',
            'description' => 'nullable',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'expiry_date' => 'required|date',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        $medicine->update([
            'name' => $validated['name'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'expiry_date' => $validated['expiry_date'],
            'supplier_id' => $validated['supplier_id'],
        ]);

        return redirect()->route('medicines.index')->with('success', 'Medicine updated successfully.');
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('medicines.index')->with('success', 'Medicine deleted successfully.');
    }
}
