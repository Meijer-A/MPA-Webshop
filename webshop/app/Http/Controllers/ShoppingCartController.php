<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Custom\cart;
use Session;

class ShoppingCartController extends Controller
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
        $products = $this->cart->show();
        $totalprice = $this->cart->totalprice;
        $user = Auth::user();
        var_dump($user);
        return view('cart.index', ['totalprice'  => $totalprice, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store($id)
    // {
    //     $this->cart->addProduct($id);
        
    //     return view('cart.index', compact('products'));
    // }

    /**
     * Store specified resource in sesssion storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $this->cart->addProduct($id);
        $products = $this->cart->show();

        $user = Auth::user();
        var_dump($user);

        return redirect()->route('shoppingcart.index');
    }
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cart->delete($id);
        return redirect()->route('shoppingcart.index');
    }

    public function destroyAll()
    {  
        $this->cart->show();

        // return redirect()->route('shoppingcart.index');
    }
}
