@extends('products.layout')

@section('content')
<div class="container">
    <h2>Create New Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Category:</label>
            <select name="category_id" class="form-control">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Product Name">
        </div>

        <div class="mb-3">
            <label>Detail:</label>
            <textarea name="detail" class="form-control" placeholder="Product Detail"></textarea>
        </div>

        <div class="mb-3">
            <label>Price Detail:</label>
            <textarea name="price_detail" class="form-control" placeholder="Price Description"></textarea>
        </div>

        <div class="mb-3">
            <label>Price:</label>
            <input type="number" name="price" class="form-control" placeholder="Price">
        </div>

        <div class="mb-3">
            <label>Image:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
