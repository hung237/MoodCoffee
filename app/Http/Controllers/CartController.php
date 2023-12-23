<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $id = $request->input('id');
        $product = DB::table('products')->where('id', $id)->first();
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] ++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];
        }
        session()->put('cart',$cart);
        return count($cart);
    }

    public function removeCart($id){
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart',$cart);
        return redirect()->back();
    }

    public function reduceCart($id){
        $cart = session()->get('cart');
        if($cart[$id]['quantity'] > 1){
            $cart[$id]['quantity'] --;
        }
        else{
            unset($cart[$id]);
        }
        session()->put('cart',$cart);
        return redirect()->back();
    }

    public function increaseCart($id){
        $cart = session()->get('cart');
        $cart[$id]['quantity'] ++;
        session()->put('cart',$cart);
        return redirect()->back();
    }
}
