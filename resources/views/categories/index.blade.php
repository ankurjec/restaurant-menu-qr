@extends('products.layout')

@section('content')
<div class="container">
    <h2>Categories</h2>
    <a class="btn btn-primary mb-3" href="{{ route('categories.create') }}">Create New Category</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th width="200px">Actions</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('categories.show', $category->id) }}">View</a>
                <a class="btn btn-warning btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $categories->links() }}
</div>
@endsection
