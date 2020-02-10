@extends('layouts.app')

@section('count_cart') {{$orders->count() ?? 0}} @endsection

@section('content')

    <div class="container">

        <h2>You have chosen:</h2>

        <div class="cart">

            <table class="table">
                <tbody>
                <tr>
                    <td>#</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Delete</td>
                    <td>Quantity</td>
                    <td>Unit price in Dollars</td>
                    <td>Unit price in Euro</td>
                    <td>Total price in Dollars</td>
                    <td>Total price in Euro</td>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td><img src='{{asset($order->products->image)}}' width="50" height="40" alt="img" /></td>
                        <td>{{$order->products->name}}</td>
                        <td><a href="{{route('basket.delete', [$order->id])}}">Delete</a></td>
                        <td>{{$order->count}}</td>
                        <td>{{$order->products->price_dollar}}</td>
                        <td>{{$order->products->price_euro}}</td>
                        <td>{{$order->products->price_dollar * $order->count}}</td>
                        <td>{{$order->products->price_euro * $order->count}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
        <div class="row">
            <div class="col-3 offset-md-6">
                <strong>Delivery: $ {{$delivery_dollar}}</strong>
            </div>
            <div class="col-3">
                <strong>Delivery: &#8364; {{$delivery_euro}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-md-6">
                <strong>TOTAL DOLLAR: {{$dollar_total}}</strong>
            </div>
            <div class="col-3">
                <strong>TOTAL EURO:  {{$euro_total}}</strong>
            </div>
        </div>

    </div>

    <footer class="bg-dark fixed-bottom">
        <div class="container py-3">
            <p class="text-center text-light"> &copy; PizzaAmorizza</p>
            <p></p>
        </div>
    </footer>

@endsection
