<?php

use App\Product;

namespace App\Http\Custom;

class Cart
{
    private $cart = array();

    public function __construct()
    {
        // $products = Product::all();
        // session()->put('cart', $product);

        if (session('cart')) {
            return session('cart');
        }
    }

    public function show()
    {
        return $this->cart;
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);

        if ($product != null) {
            session()->put('cart', $product);
        }
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