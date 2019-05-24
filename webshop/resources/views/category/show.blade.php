
@extends('layouts.app')

@section('content')
<div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top img-fluid productImg" src="img/{{ $product->image }}" alt="{{ $product->name }}">
                <div class="card-body">
                    {{ $product->name }}
                    <p class="card-text">{{ $product->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/product/{{ $product->id }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                    class="fas fa-shopping-cart"></i></button>
                        </div>
                        <small class="text-muted"><span>&#8364;</span> {{ $product->price }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection