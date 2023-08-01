@extends('customer_home')

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/images/'.$product->image) }}" class="card-img-top" alt="{{ $product->product_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">details:{{ $product->product_detail }}</p>
                        <p class="card-text">Price: {{ $product->product_price }}</p>
                        <p class="card-text">discount: {{ $product->discount }}</p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
