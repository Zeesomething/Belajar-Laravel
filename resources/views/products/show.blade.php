@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Product') }}</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name Product</label>
                            <input type="text" class="form-control" name="name_brand" value="{{$product->name_product}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="name_brand" value="{{$product->price}}" disabled>
                        </div>    
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="name_brand" value="{{$product->description}}" disabled>
                        </div>     
                        <div class="mb-3">
                            <label class="form-label">Id Brand</label>
                            <input type="text" class="form-control" name="name_brand" value="{{$product->id_brand}}" disabled>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Cover</label>
                            <img src="{{ asset('images/product/' . $product->cover) }}" width="100" alt="">
                        </div>
                        <a href="{{url('product')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
