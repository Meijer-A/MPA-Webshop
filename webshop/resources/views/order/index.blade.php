@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="pt-5 pb-3">Bestellen</h1>
    <div class="row">
        <div class="col-md-8">
        @if (Session::has('cart'))
            <table class="table">
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td><img src="img/{{ $product->image }}" alt="{{ $product->name }}"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
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
        @endif
        </div>
        <div class="col-4">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Account</div>
                <div class="card-body">
                    <p>Naam: {{ $user->name }} </p>
                    <p>Email: {{$user->email }} </p>
                </div>
            </div>
            <form action="{{action('OrderController@create')}}" method="PUT">
                @csrf
                <button type="submit" class="btn btn-outline-success">Bestelling afronden</button>
            </form>
        </div>
    </div>
</div>
@endsection