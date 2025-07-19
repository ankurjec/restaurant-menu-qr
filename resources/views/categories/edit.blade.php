@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control">{{ $category->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
