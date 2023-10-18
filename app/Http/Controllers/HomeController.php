<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $products = Product::all();
        $productServices = Product::where('is_service', true)->get();
        $tours = Tour::with( 'services')->where('is_coming_soon', 0)->latest()->take(3)->get();
        $comingSoonTours = Tour::with( 'services')->where('is_coming_soon', 1)->latest()->take(3)->get();
//        return $tours;
        return view('index', compact('services', 'tours', 'products', 'comingSoonTours', 'productServices'));
    }
}
