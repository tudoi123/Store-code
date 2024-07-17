@extends('layouts.app')

@section('body')
    <style>
        .add-to-cart-btn {
            background-color:red;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #0056b3;
        }

        .card-img-top {
            width: 100%; /* Chiều rộng 100% để khung hình mở rộng đầy đủ theo kích thước cố định */
            height: 400px; /* Đặt chiều cao cố định cho khung hình */
            object-fit: cover; /* Đảm bảo hình ảnh điều chỉnh mà không bị méo hoặc bị căng */
        }
    </style>

    <div style="text-align: center;">
        <h1 style="font-size: 30px; font-weight:bold">List Book</h1>
        <hr/>

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="row">
            @if($productUser->count() > 0)
                @foreach($productUser as $rs)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="{{ asset('images/' . $rs->product_code), }}" class="card-img-top" alt="{{ $rs->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $rs->title }}</h5>
                                <p class="card-text">{{ $rs->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('productuser.show', $rs->id) }}" type="button" class="btn btn-sm btn-outline-secondary">Detail</a>
                                    </div>
                                    <small class="text-muted">{{ $rs->price }}</small>
                                </div>
                                <div class="mt-2">
                                    <a href="#" class="add-to-cart-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col text-center">
                    <p>Product not found</p>
                </div>
            @endif
        </div>
    </div>
@endsection
