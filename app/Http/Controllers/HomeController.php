<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Fastfood;
use App\Drink;
use App\Soup;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all()->toarray();
        $fastfoods = Fastfood::all()->toarray();
        $drinks = Drink::all()->toarray();
        $soups = Soup::all()->toarray();
        return view('home',['fastfoods' => $fastfoods,'products' => $products,'drinks' => $drinks,'soups' => $soups]);

    }
    public function menu()
    {   
        $products = Product::all()->toarray();
        $fastfoods = Fastfood::all()->toarray();
        $drinks = Drink::all()->toarray();
        $soups = Soup::all()->toarray();
        return view('menu',['fastfoods' => $fastfoods,'products' => $products,'drinks' => $drinks,'soups' => $soups]);
    }
    public function about()
    {
    return view('about');
    }
    public function contact()
    {
    return view('contact');
    }

}
