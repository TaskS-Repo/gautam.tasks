@extends('payment.navigation')

@section('contents')

<div class="checkoutcontainer">

    <div class="left">
    @foreach ( $medicine as $medicines )


        <div class="cart-item">
            <img src="{{ asset('image/front-main-with-ingredients-1-500x500.jpg') }}" alt="">

            <div class="cart-detail">
                <div class="item-name">
                    <span>Name::</span>
                    <p>{{ $medicines->name }}</p>
                </div>
                <div class="item-name">
                    <span>Price::Rs.</span>
                    <p>{{ $medicines->price }}</p>
                </div>
                <div class="incrdecr">
                    <span>+</span>
                    <hr>
                    <span>{{ $medicines->total_item }}</span>
                    <hr>
                    <span>-</span>
                </div>
                <div class="item-name">
                    @php
                    $main_total=0;
                        $total_amount=$medicines->total_item*$medicines->price;
                    @endphp

                    <span>Total_Amount::</span>
                    <p>{{ $total_amount }}</p>
                </div>

                <div class="delete">
                    <a href="#">
                        <p>{{$medicines->id}}</p>
                        <span>Delete</span>
                    </a>
                </div>
            </div>
    </div>
    @endforeach

</div>
@php
$main_total=0;
    foreach ($medicine as $medic)
    {
       $total_amount=$medic->total_item*$medic->price;
       $main_total+=$total_amount;
    }


    //echo $main_total;


@endphp
 <div class="right">
        <div class="checkout-card">
            <div class="t-item">
                <span>Total Item::</span>
                <p>5</p>
            </div>

            <div class="t-sub">
                <span>Sub total::</span>
                <p>{{ $main_total }}</p>
            </div>
            <hr>
            <div class="total">
                <span>Total::</span>
                <p>Rs.10000</p>
            </div>

            <a href="#">
                <span>Checkout</span>
            </a>
        </div>

</div>






@endsection
