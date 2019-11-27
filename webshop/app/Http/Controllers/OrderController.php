<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Custom\cart;
use Session;

class OrderController extends Controller
{
    public $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $products = $this->cart->show();
            $totalprice = $this->cart->totalprice;
            
            return view('order.index', ['totalprice'  => $totalprice, 'products' => $products, 'user' =>  $user]);
        } else {
            // return redirect()->route('auth.login');
            return "Je moet eerst inloggen voordat je kan bestellen";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $products = $this->cart->show();
        $total_price = $this->cart->totalprice;
        $order = new Order();
        $order->user_id = $user->id;
        $order->total_price = 0;
        $order->save();
        foreach($products as $product) {
            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->product_id = $product->id;
            $orderProduct->quantity = $product->quantity;
            $orderProduct->total_price = $product->price * $product->quantity;
            $order->total_price += $orderProduct->total_price;
            $orderProduct->save();
        }
        $order->save();
        $this->cart->emptyCart();
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    public function showOrder() 
    {
        $user = auth()->user();
        $orders = $user->orders; 
        return view("order.show", ['orders' => $orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
