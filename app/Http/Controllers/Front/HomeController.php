<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(){
        $laptopnewProduct = Product::where('featured',true)->where('product_category_id', 1)->get();
        $laptopnoldProduct = Product::where('featured',true)->where('product_category_id', 2)->get();
        return view('front.index', compact('laptopnewProduct','laptopnoldProduct'));
    }
}
