@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Product</h1>
    </div>
    <div id="app">
        <create-product :variants="{{ $variants }}">Loading</create-product>

        <form action="{{route('product.store')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>

            <div class="form-group">
                <input type="text" name="sku" class="form-control" placeholder="sku">
            </div>

            <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>

            <input type="submit">
        </form>
    </div>
@endsection
