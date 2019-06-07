<?php

namespace App\Http\Custom;

use App\Product;
use Session;

class Cart
{
    public $cart = [];
    public $totalprice;

    public function __construct()
    {
        // $products = Product::all();
        // session()->put('cart', $product);

        if (session('cart')) {
            $this->cart = session('cart');
        }
        session()->flush();
    }

    public function show()
    {
        if (session::has('cart')) {
            $products = [];

            foreach (session('cart') as $item) {
                $product = Product::find($item['id']);
                $product->quantity = $item['quantity']; 

                $this->totalprice += ($product->price * $product->quantity);
                array_push($products, $product);
            }
            return $products;
        }
        return null;
    }

    public function addProduct($id)
    {
        if (Product::find($id) !== null) {
            $newProduct = true;

            if (session::has('cart')) {
                $this->cart = session('cart');
                foreach ($this->cart as $key => $product) {
                    if ($product['id'] == $id) {
                        $newProduct = false;
                        $this->cart[$key]['quantity']++;       
                    } else {
                    }
                }
            } 
        }

        if ($newProduct === true) {
            $product = array(
                'id' => $id,
                'quantity' => 1
            );
            array_push($this->cart, $product);
        }

        session(['cart' => $this->cart]);

        // session()->flush();
        // var_dump(session('cart'));
    }

    public function delete($id)
    {
        if (Product::find($id) !== null) {

            if (session::has('cart')) {

                $this->cart = session('cart');

                foreach ($this->cart as $key => $product) {
                    if ($product['id'] == $id) {
                        array_splice($this->cart, $key, 1);
                    } 
                }
            } 
        }
        if (count($this->cart) === 0) {
            session()->forget('cart');
        } else {
            session(['cart' => $this->cart]);
        }
    }

    public function changeQuantity($id, $quantity) 
    {

    }
}