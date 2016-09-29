@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif
            <h4 class="pull-left">Carts</h4>
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Order</th>
                    </tr></thead>
                    <tbody>
                    @foreach($carts as $cart)
                        <tr>
                            <td>{{ App\User::find($cart->user_id)->name }}</td>
                            <td> {{ App\Product::find($cart->product_id)->name }}</td>
                            <td>Rs {{ App\Product::find($cart->product_id)->price }} per unit</td>
                            <td> {{$cart->quantity}}</td>
                            <td>Rs {{$cart->total}}</td>
                            <td>
                                {!! Form::open(array('route'=>['orders.add'])) !!}

                                {!! Form::hidden('user_id', auth()->id()) !!}
                                {!! Form::hidden('total', $cart->total) !!}
                                {!! Form::hidden('product_id', $cart->product_id) !!}

                                {!! Form::submit('Order Now',['class'=>'btn btn-primary pull-right']) !!}

                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection