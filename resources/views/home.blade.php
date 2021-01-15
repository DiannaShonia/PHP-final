@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            @foreach($products as $product)
                <div class="col-4">
                    <a href="{{ route('single.product', $product->id) }}">
                        <img src="https://theauburnhotel.com.au/wp-content/uploads/2017/07/500x500.png" alt="" class="w-100">
                        <h5>{{ $product->name }}</h5>
                        <h5>{{ $product->description }}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
