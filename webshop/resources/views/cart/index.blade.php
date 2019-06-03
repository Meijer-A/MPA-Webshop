@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="pt-5 pb-3">Winkelwagen</h1>
    @if (Session::has('cart'))
        <table class="table mt-5">
            <tbody>
            @foreach($products as $product)
            <tr>
                <td><img src="../img/{{ $product->image }}" alt="{{ $product->name }}"></td>
                <td>{{ $product->name }}</td>
                <td><input type="number" value="{{ $product->quantity }}"></td>
                <td>{{ $product->price }}</td>
                <td>
                    <form action="{{ action('ShoppingCartController@destroy', ['id' => $product->id]) }}" method="POST">    
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary" >Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2>Er zijn geen producten</h2>
    @endif

</div>
@endsection