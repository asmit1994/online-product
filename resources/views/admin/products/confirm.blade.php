@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['method'=>'delete','route'=>['products.destroy',$product->id]]) !!}
        <div class="alert alert-danger">
            <div class="alert alert-danger">
                <strong>Warning</strong> You are about to delete a Product. This action can not be undone. Are U sure you want to continue ?
            </div>
            {!! Form::submit('Yes, Delete This Page',['class'=>'btn btn-danger']) !!}
            <a href="{{ route('products.index') }}" class="btn btn-success"> <strong>No Get Me Out Of Here</strong></a>
        </div>
        {!! Form::close() !!}
    </div>
@endsection