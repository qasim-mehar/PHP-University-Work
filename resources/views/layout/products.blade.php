@extends('layout.app')

@section('content')
    <h2>Product List</h2>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>
@endsection
