{{-- @extends('products.layout')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <img src="https://dummyimage.com/100x100/cccccc/000000&text=Spoon" alt="Silver Spoon Logo" width="100" class="mb-2">
        <h1 class="display-4 fw-bold">Silver Spoon Restaurant</h1>
        <p class="text-muted">Delicious food, delightful experience.</p>
        <hr>
    </div>

    @foreach ($categories as $category)
        <div class="mb-5">
            <h3 class="mb-4 border-bottom pb-2">{{ $category->name }}</h3>
            <div class="row">
                @foreach ($category->products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            @if($product->image)
                                <img src="https://dummyimage.com/100x100/cccccc/000000&text=Spoon" class="card-img-top" alt="{{ $product->name }}">
                            @else
                                <img src="https://dummyimage.com/100x100/cccccc/000000&text=Spoon" class="card-img-top" alt="Food Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="bi bi-star-fill text-warning me-1"></i> 
                                    {{ $product->name }}
                                </h5>
                                <p class="card-text text-muted">₹{{ number_format($product->price, 2) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection --}}

{{-- @extends('products.layout')

@section('content')
<style>
    body {
        background-color: white; /* Outer background */
    }

    .menu-wrapper {
        background-color: #fff8dc;
        background-image: url('https://www.transparenttextures.com/patterns/wood-pattern.png');
        background-repeat: repeat;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .category-title {
        font-weight: bold;
        text-transform: uppercase;
        /* border-bottom: 2px solid #ccc; */
        padding-bottom: 10px;
        color: #6dca51;
    }

    .menu-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        /* border-bottom: 1px solid #ccc; */
    }

    .item-name {
        color: #ac4d52;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .price-image {
        display: flex;
        align-items: center;
    }

    .item-price {
        color: #ac4d52;

        font-weight: bold;
        margin-right: 15px;
        font-size: 1rem;
    }

    .item-image {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
    }
</style>

<div class="container mt-5 bg-white p-4 rounded shadow-sm" style="max-width: 1900px;">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: maroon;">FOOD MENU</h1>
        <hr style="border-top: 3px solid maroon; width: 100px; margin: 0 auto;">
    </div>

    <div class="menu-wrapper">
        @php
            $menu = [
                [
                    'category' => 'Snacks',
                    'items' => [
                        ['name' => 'Samosa', 'price' => '₹10', 'image' => 'https://dummyimage.com/60x60/cccccc/000000&text=Samosa'],
                        ['name' => 'Pakora', 'price' => '₹15', 'image' => 'https://dummyimage.com/60x60/cccccc/000000&text=Pakora'],
                    ],
                ],
                [
                    'category' => 'Drinks',
                    'items' => [
                        ['name' => 'Tea', 'price' => '₹8', 'image' => 'https://dummyimage.com/60x60/cccccc/000000&text=Tea'],
                        ['name' => 'Coffee', 'price' => '₹12', 'image' => 'https://dummyimage.com/60x60/cccccc/000000&text=Coffee'],
                    ],
                ],
            ];
        @endphp

        @foreach ($menu as $category)
            <div class="mb-4">
                <h4 class="category-title"><u>{{ $category['category'] }}</u></h4>

                @foreach ($category['items'] as $item)
                    <div class="menu-item">
                        <div class="item-name">{{ $item['name'] }}</div>
                        <div class="price-image">
                            <div class="item-price">{{ $item['price'] }}</div>
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="item-image">
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endsection --}}
@extends('products.layout')

@section('content')
<style>
    body {
        background-color: white;
    }

    .menu-wrapper {
        background-color: #fff8dc;
        background-image: url('https://www.transparenttextures.com/patterns/wood-pattern.png');
        background-repeat: repeat;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .category-title {
        font-weight: bold;
        text-transform: uppercase;
        padding-bottom: 10px;
        color: #3e8a1a;
    }

    .menu-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
    }

    .item-name {
        font-size: 1.1rem;
        font-weight: 500;
        color: #a74527;
    }

    .price-image {
        display: flex;
        align-items: center;
    }

    .item-price {
        font-weight: bold;
        margin-right: 15px;
        font-size: 1rem;
    }

    .item-image {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
    }
</style>

<div class="container mt-5 bg-white p-4 rounded shadow-sm" style="max-width: 1900px;">
    <div class="text-center mb-5">
        <h1 style="color: maroon; font-family: 'Roboto', sans-serif; letter-spacing: 4px; text-transform: uppercase; display: flex; align-items: center; gap: 15px;">
            <span style="flex: 1; height: 2px; background: maroon;"></span>
            FOOD MENU
            <span style="flex: 1; height: 2px; background: maroon;"></span>
        </h1>        <hr style="border-top: 3px solid maroon; width: 100px; margin: 0 auto;">
    </div>

    <div class="menu-wrapper">
        @foreach ($categories as $category)
            <div class="mb-4">
                <h4 class="category-title"><u>{{ $category->name }}</u></h4>

                @foreach ($category->products as $product)
                    <div class="menu-item">
                        <div class="item-name">{{ $product->name }}</div>
                        <div class="price-image">
                            <div class="item-price">₹{{ $product->price }}/-</div>
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="item-image">
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endsection
