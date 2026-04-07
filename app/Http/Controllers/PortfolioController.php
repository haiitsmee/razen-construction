<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('portfolio.index', compact('portfolios'));
    }
    public function show($slug)
    {
        $project = Portfolio::where('slug', $slug)->firstOrFail();
        return view('portfolio.detail', compact('project'));
    }
}
