<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard utama Satu Data Sulteng
     */
    public function index()
    {
        // TODO: ganti angka statis ini dengan query asli setelah tabel diisi, contoh:
        // 'totalDataset'    => \App\Models\Dataset::count(),
        // 'totalOrganisasi' => \App\Models\Organization::count(),
        // 'totalPengunjung' => \App\Models\Visitor::count(),
        
        return view('dashboard.dashboard', [
            'totalDataset'    => 0,
            'totalOrganisasi' => 0,
            'totalPengunjung' => 0,
        ]);
    }
}
