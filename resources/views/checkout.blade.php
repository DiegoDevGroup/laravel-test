@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @php
                        $total = 0
                    @endphp
                    <div class="card-header">Check Out</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">Product</div>
                            <div class="col-4">Quantity</div>
                            <div class="col-4">Total</div>
                        </div>
                        <hr>

                        @if ( empty($items) )
                            <p>You have no items in you cart</p>
                        @else
                            @foreach ( $items as $key => $item )
                                <div class="row">
                                    <div class="col-4">{{ $item['name'] }}</div>
                                    <div class="col-4">{{ $item['quantity'] }}</div>
                                    <div class="col-4">
                                        ${{ number_format(($item['quantity'] * $item['price'])/100, 2, '.', ' ') }} <br>
                                    </div>
                                </div>
                                <hr>
                                @php
                                    $total+= $item['quantity'] * $item['price']
                                @endphp
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-8"><h2>Total:</h2></div>
                            <div class="col-4">${{ number_format( $total/100,2,'.',' ') }}</div>
                        </div>
                        <div class="row float-right">
                            <button type="button" class="btn btn-info">
                                Process Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
