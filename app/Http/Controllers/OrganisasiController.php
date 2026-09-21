<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class OrganisasiController extends Controller
{
    public function index()
    {
        // Check if organizations table exists
        if (!Schema::hasTable('organizations')) {
            $organisasi = collect([]);
            $totalOrganisasi = 0;
        } else {
            try {
                $organisasi = Organization::all();
                $totalOrganisasi = Organization::count();
            } catch (\Exception $e) {
                $organisasi = collect([]);
                $totalOrganisasi = 0;
            }
        }
        
        return view('organisasi.index', compact('organisasi', 'totalOrganisasi'));
    }
}
