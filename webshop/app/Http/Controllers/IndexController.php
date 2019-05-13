<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Validator;
use Session;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class IndexController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::all();
        $products = Product::all();
        return view('index',compact('products'));
    }
}
