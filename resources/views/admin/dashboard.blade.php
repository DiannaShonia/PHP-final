@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('create.product') }}">Add Product</a>
        <div class="row mt-5">
            @foreach($products as $product)
                <div class="col-4">
                    <img src="https://theauburnhotel.com.au/wp-content/uploads/2017/07/500x500.png" alt="" class="w-100">
                    <h5>{{ $product->name }}</h5>
                    <h5>{{ $product->description }}</h5>
                    <form action="{{ route('delete.product', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
