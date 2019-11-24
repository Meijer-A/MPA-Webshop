@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="pt-5 pb-3">Bestellen</h1>
    <div class="row">
        @if ($orders)
        @foreach($orders as $order)
        <div class="col-lg-12">
            <div class=" mb-3">
            <a class="" data-toggle="collapse" href="#collapseExample{{$order->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                <h3>Ordernummer: {{$order->id}}</h3>
                <h5>{{ $order->created_at->format("d/m/Y") }}</h5>
                <p >&euro; {{ number_format($order->total_price , 2, ',', '.') }}</p>
            </a>
                <div class="">
                    @foreach($order->orderProducts as $orderProduct)
                        <p class="card-text">{{$orderProduct->product->name}} <small class="text-muted">x {{$orderProduct->quantity}}</small></p>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection