<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Components\Recusive;
class HomeController extends Controller
{
    public function index(){
        return view("fe.home");
    }


    public function showProduct(){

        $products = Product::all();
        $categories = Category::all();
        return view("fe.product",compact("products","categories"));


    }

    public function detail($slug){

        $product = Product::where('slug',$slug)->first();
        //dd($product) ;
        return view('fe.detail',compact('product'));
    }

}
