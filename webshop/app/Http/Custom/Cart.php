<?php

namespace App\Http\Custom;

use App\Product;
use Session;

class Cart
{
    private $cart = array();



    public function __construct()
    {
        // $products = Product::all();
        // session()->put('cart', $product);

        if (session('cart')) {
            $this->cart = session('cart');
        }
    }

    public function show()
    {
        return session('cart');
    }

    public function addProduct($id)
    {
        array_push($this->cart, $id);

        // session('cart')->put('cart', $this->cart);
        // Session::push('cart', $this->cart);
        session(['cart' => $this->cart]);

    }

    public function remove($product, $amount)
    {
        // session('cart') = $this->cart;
    }
    public function reset()
    {
        $this->cart = [];
        // session('cart') = $this->cart;
    }
}