@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="pt-5 pb-3">Winkelwagen</h1>
    @if (Session::has('cart'))
        <a href="/shoppingcart/remove" class="btn btn-sm btn-outline-secondary">Verwijder alles</a>
        <!-- <table class="table">
            <tbody>
            @foreach(Session::get('cart') as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['quantity'] }}</td>
            </tr>
            @endforeach
            </tbody>
        </table> -->
        <table class="table mt-5">
            <tbody>
            @foreach($products as $product)
            <tr>
                <td><img src="../img/{{ $product->image }}" alt="{{ $product->name }}"></td>
                <td>{{ $product->name }}</td>
                <td><input type="number" value="{{ $product->quantity }}"></td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2>Er zijn geen producten</h2>
    @endif

</div>
@endsection