<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua layanan
        $services = Service::all();

        // Mengambil portofolio terbaru, batasi maksimal 4
        $portfolios = Portfolio::latest()->take(4)->get();
        
        return view('welcome', compact('services', 'portfolios'));
    }
}