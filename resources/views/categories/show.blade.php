@extends('products.layout')

@section('content')
<div class="container">
    <h2>Category Details</h2>
    <div class="mb-3">
        <strong>Name:</strong> {{ $category->name }}
    </div>
    <div class="mb-3">
        <strong>Description:</strong> {{ $category->description }}
    </div>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
