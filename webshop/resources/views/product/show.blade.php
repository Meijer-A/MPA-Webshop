@extends('layouts.app')

@section('content')
<div class="row mt-5 product-detail">	
	<div class="product col-md-5">
		<center>
			<img src="../img/{{ $product->image }}" alt="{{ $product->name }}">
		</center>
	</div>
		
	<div class="col-md-6">
		<h1 class="product-title">{{ $product->name }}</h1>
		<p class="product-desc">{{ $product->description }}</p>
		<hr>
		<p class="product-price">{{ $product->price }}</p>
		<div class="product-stock">In Stock</div>
		<hr>
		<div class="btn-group cart">
			<form action="{{action('ShoppingCartController@add', ['id' => $product->id])}}" method="POST">    
				@csrf
				<button type="submit" class="btn btn-success">
				Bestel nu
				</button>
			</form>
		</div>
	</div>
</div> 
@endsection