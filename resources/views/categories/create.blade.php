@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Category Name">
        </div>
        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control" placeholder="Category Description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
