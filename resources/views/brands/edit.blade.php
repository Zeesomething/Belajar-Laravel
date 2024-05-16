@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Brand') }}</div>
                <div class="card-body">
                    <form action="{{route('brand.update', $brand->id)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            @method('PUT')
                            <label class="form-label">Name Brand</label>
                            <input type="text" class="form-control" name="name_brand" value="{{$brand->name_brand}}">
                        </div>
                        <button href="{{url('brand')}}" class="btn btn-primary">Edit</button>
                        <a href="{{url('brand')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
