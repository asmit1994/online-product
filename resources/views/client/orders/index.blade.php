@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif
            <h4 class="pull-left">Orders</h4>

            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Product Name</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ App\User::find($order->user_id)->name }}</td>
                            <td>{{App\Product::find($order->product_id)->name}}</td>
                            <td>Rs {{$order->total}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection