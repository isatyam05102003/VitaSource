<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMedicines = Medicine::count();
        $totalSuppliers = Supplier::count();
        $totalStock = Medicine::sum('quantity'); // <-- ADD this line
        $lowStock = Medicine::where('quantity', '<', 10)->count();

        return view('dashboard', compact('totalMedicines', 'totalSuppliers', 'totalStock', 'lowStock'));
    }
}
