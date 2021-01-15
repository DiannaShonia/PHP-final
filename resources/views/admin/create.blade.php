@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/dashboard" class="col-4">Back To Admin Page</a>
        <form action="{{ route('create.product') }}" method="post" class="col-4 mt-3">
            @csrf
            <h3>Add Product</h3>
            <input type="text" name="name" class="form-control mt-3" placeholder="name">
            <input type="text" name="description" class="form-control mt-3" placeholder="description">
            <button type="submit" class="btn btn-primary mt-3">Add Product</button>
        </form>
    </div>
@endsection
