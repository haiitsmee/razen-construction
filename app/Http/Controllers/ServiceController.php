<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug)
    {
        // Mencari service berdasarkan slug, jika tidak ada tampilkan 404
        $service = Service::where('slug', $slug)->firstOrFail();
        
        return view('services.detail', compact('service'));
    }
}
