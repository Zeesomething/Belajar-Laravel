@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Product') }}</div>
                <div class="card-body">
                    <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            @method('PUT')
                            <label class="form-label">Name Product</label>
                            <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}">
                        </div>
                        <div>
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}">
                        </div>
                        <div>
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}">
                            </div>
                            <div>
                            <label class="form-label">Id Brand</label>
                            <select name="id_brand" class="form-control">
                            @foreach ($brand as $data)
                                <option value="{{$data->id}}" {{$data->id == $product->id_brand ? "selected" : ''}}>{{$data->name_brand}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Cover</label>
                            <img src="{{ asset('images/product/' . $product->cover) }}" width="100" alt="">
                            <input type="file" class="form-control" name="cover">
                        </div>
                        <button href="{{url('product')}}" class="btn btn-primary">Edit</button>
                        <a href="{{url('product')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
