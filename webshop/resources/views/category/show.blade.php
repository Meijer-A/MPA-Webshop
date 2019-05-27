
@extends('layouts.app')

@section('content')
<div class="main-text">
    <h1>{{$category->name}}</h1>
    <p>{{$category->description}}</p>
</div>
<div class="row">
    @foreach($products as $product)
    <div class="col-md-3">
        <div class="product">
            <div class="product-image">
                <img src="../img/{{ $product->image }}" alt="{{ $product->name }}">
            </div>
            <div class="product-info">
                <p class="product-name">{{ $product->name }}</p>
                <div class="">
                    <p class="price"><span>&#8364;</span>{{ $product->price }}</p>
                    <div class="btn-group">
                        <a href="/product/{{ $product->id }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                        <a href="/product/{{ $product->id }}" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection