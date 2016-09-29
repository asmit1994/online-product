@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif
            <h4 class="pull-left">Products</h4>
            <a href="{{ route('products.create') }}" class="pull-right">
                <button class="btn btn-primary">Create Product</button>
            </a>
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr></thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>Rs {{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td><a href="{{route('products.edit', $product->id)}}">
                                <i class="ion ion-edit"></i> Edit
                            </a>
                        </td>
                        <td><a href="{{route('admin.products.confirm', $product->id)}}">
                                <i class="ion ion-close"></i> Delete
                            </a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection