@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            {!! Form::open(['url'=>'carts', 'method' => 'post']) !!}

            <div class="form-group">
                {!! Form::label('quantity') !!}
                {!! Form::text('quantity',null,['class'=>'form-control']) !!}
            </div>
            {!! Form::hidden('user_id', auth()->id()) !!}
            {!! Form::hidden('product_id', $product->id) !!}
            {!! Form::hidden('price', $product->price) !!}

            {!! Form::submit('Add To cart',['class'=>'btn btn-primary pull-right']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@endsection