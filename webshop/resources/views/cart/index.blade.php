@extends('layouts.app')

@section('content')
<div class="main-text">
    <h1>Winkelwagen</h1>
</div>
<div class="container">
    <form action="shoppingcart/delete" method="post">    
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-sm btn-outline-secondary">Verwijder alles</button>
    </form>
    <table class="table">
        <tbody>
            @foreach(Session::get('cart') as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['quantity'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection