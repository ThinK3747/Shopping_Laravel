<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Helper\Cart;
class CartController extends Controller
{
    public function index(Cart $cart){
        //$cartItems = $cart->list();

        return view("fe.cart",compact("cart"));
    }
    public function add(Request $request, Cart $cart){
        $product = Product::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product, $quantity);
        return redirect()->route('cart.index');
    }
}
