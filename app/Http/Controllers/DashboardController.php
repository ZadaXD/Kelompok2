<?php

namespace App\Http\Controllers;

use App\Models\KodeRuang;
use App\Models\KodeBarang;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRuang = KodeRuang::count();
        $totalBarang = KodeBarang::count();

        $barangByKondisi = KodeBarang::selectRaw('kondisi, COUNT(*) as jumlah')
            ->groupBy('kondisi')
            ->get();

        return view('dashboard', compact('totalRuang', 'totalBarang', 'barangByKondisi'));
    }
}


