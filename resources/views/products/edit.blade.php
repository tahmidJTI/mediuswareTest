@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
    </div>
    <div id="app">
        <create-product :variants="{{ $variants }}">Loading</create-product>
    </div>


    <form action="{{route('product.update',$product->id)}}" method="post">

        @method('PUT')
        {{csrf_field()}}

        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="title" value="{{$product->title}}">
        </div>

        <div class="form-group">
            <input type="text" name="sku" class="form-control" placeholder="sku" value="{{$product->sku}}">
        </div>

        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="description" value="{{$product->description}}">
        </div>

        <input type="submit">
    </form>
@endsection
