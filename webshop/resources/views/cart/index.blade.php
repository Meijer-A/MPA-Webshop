@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="pt-5 pb-3">Winkelwagen</h1>
    @if (Session::has('cart'))
        <table class="table mt-5">
            <tbody>
            @foreach($products as $product)
            <tr>
                <td><img src="img/{{ $product->image }}" alt="{{ $product->name }}"></td>
                <td>{{ $product->name }}</td>
                <td><input type="number" value="{{ $product->quantity }}" id="quantity-{{$product->id}}"></td>
                <td><span>&#8364;</span> {{ $product->price }}</td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><span>&#8364;</span> {{ $totalprice }}</td>
                <td></td>
            </tr>
            </tbody>
        </table>
            <button type="submit" class="btn btn-sm btn-outline-secondary">
            <a href="{{ action('OrderController@index') }}">
                Bestellen
            </a>
            </button>
    @else
        <h2>Er zijn geen producten</h2>
    @endif
</div>
@endsection