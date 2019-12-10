@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="float-right">
                        <a href="{{ route('checkout') }}">
                            <button type="button" class="btn btn-secondary">
                                View Cart
                            </button>
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($products->count() === 0)
                            <h1>Congrats, you made it to the Products page</h1>
                            <p>There are no products to look at currently but we can fix that :-)</p>
                        @else
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-4"> Name</div>
                                <div class="col-4"> Desc.</div>
                                <div class="col-2"> Price</div>
                            </div>
                            @foreach ($products as $product)
                                <div class="row">
                                    <div class="col-2"><img src="{{ asset('imgs/image'.rand(1,5).'.jpg') }}"
                                                            alt="{{ $product->name }}"></div>
                                    <div class="col-4">{{ $product->name }}</div>
                                    <div class="col-4">{{ $product->description }}</div>
                                    <div class="col-2">
                                        ${{ number_format($product->price/100, 2, '.', ' ') }} <br>
                                        <a href="{{ route('cart', [$product->id]) }}">
                                            <button type="button" class="btn btn-primary">Add to Cart</button>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
