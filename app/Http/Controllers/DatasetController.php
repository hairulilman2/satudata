<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasetController extends Controller
{
    /**
     * Menampilkan daftar dataset
     */
    public function index()
    {
        // TODO: ambil data dari database
        // $datasets = Dataset::with('organization')->paginate(12);
        
        return view('dataset.index');
    }
}
