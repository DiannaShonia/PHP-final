@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <img src="https://theauburnhotel.com.au/wp-content/uploads/2017/07/500x500.png" alt="" class="w-100">
                <h5>{{ $id->name }}</h5>
                <h5>{{ $id->description }}</h5>
            </div>
        </div>
    </div>
@endsection
