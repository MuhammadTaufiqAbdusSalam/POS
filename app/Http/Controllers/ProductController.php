<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodbeverage(){
        return view('produk.produk')
        ->with('category','food baverege');
    }
    public function beautyhealty(){
        return view('produk.produk')
        ->with('category','Beauty and health');
    }
    public function homecare(){
        return view('produk.produk')
        ->with('category','home-care');
    }
    public function babykid(){
        return view('produk.produk')
        ->with('category','baby-kid');
    }
    
}