@extends('layouts.app')

@section('content')
<div class="main-text">
    <h1>Winkelwagen</h1>
</div>
<div class="container">
    <table class="table">
        <tbody>
            @foreach(Session::get('cart') as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection