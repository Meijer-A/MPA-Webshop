<?php

namespace App\Http\Custom;

use App\Product;
use Session;

class Cart
{
    private $cart = [];



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
        $this->cart = session('cart');

        foreach ($this->cart as $item) {
            if ($item['id'] == $id) {
                $item['quantity']++;
            } else if ( $item['id'] !== $id ) {
                $quantity = 1;
                $product = [
                    'id' => $id,
                    'quantity' => $quantity
                ];
                array_push($this->cart, $product);
            }
        }

        session(['cart' => $this->cart]);
    }

    public function remove($product, $amount)
    {
        // session('cart') = $this->cart;
    }

    public function removeAll()
    {
        session('cart')->flush();
    }
}