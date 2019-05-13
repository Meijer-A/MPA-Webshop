@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($categories as $category)
        <a href="">{{ $category->name }}</a>
    @endforeach
</div>
@endsection