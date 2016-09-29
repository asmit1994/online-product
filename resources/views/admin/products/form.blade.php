@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>Create Product</h4>
        <hr/>

        {!! Form::model($product,[
        'method'=> $product->exists ? 'put' : 'post',
        'route' => $product->exists ? ['products.update',$product->id] : ['products.store']
        ]) !!}

        <div class="form-group">
            {!! Form::label('name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price') !!}
            {!! Form::text('price',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description') !!}
            {!! Form::textarea('description',null,['class'=>'form-control','rows'=>5]) !!}
        </div>

        {!! Form::submit($product->exists ? 'Save Product' : 'Create Product',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@endsection