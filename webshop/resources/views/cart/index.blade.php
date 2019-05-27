@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Winkelwagen</h1>

    <table class="table">
    <thead>
        <tr>
        <th></th>
        <th>naam</th>
        <th>Prijs</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td><img class="card-img-top img-fluid productImg" src="img/{{ $product->image }}" alt="{{ $product->name }}"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection