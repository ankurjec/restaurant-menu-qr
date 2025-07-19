@extends('products.layout')

@section('content')
<div class="container text-center">
    <h2>Scan for Menu</h2>
    <div>
        {!! QrCode::size(250)->generate($url) !!}
    </div>
    {{-- <p><a href="{{ $url }}" target="_blank">{{ $url }}</a></p> --}}
</div>
@endsection
