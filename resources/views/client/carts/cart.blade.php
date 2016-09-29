@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(array('route'=>['carts.add'])) !!}

        <div class="form-group">
            {!! Form::label('quantity') !!}
            {!! Form::text('quantity',null,['class'=>'form-control']) !!}
        </div>
        {!! Form::hidden('id', $product->id) !!}
        {!! Form::hidden('product_id', $product->id) !!}
        {!! Form::hidden('price', $product->price) !!}

        {!! Form::submit('Add To Cart',['class'=>'btn btn-primary pull-right']) !!}

        {!! Form::close() !!}
    </div>
@endsection