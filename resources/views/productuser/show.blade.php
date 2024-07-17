@extends('layouts.app')

@section('body')
    <style>
        .product-detail-container {
            display: flex;
            align-items: flex-start;
        }

        .product-image {
            flex: 0 0 auto;
            margin-right: 20px;
        }

        .product-image img {
            max-width: 300px; /* Đây là chiều rộng tối đa của ảnh */
            height: auto; /* Đảm bảo tỉ lệ khung hình tự động thay đổi */
        }

        .product-details {
            flex: 1 1 auto;
        }

        .product-details label {
            font-weight: bold;
        }

        .product-details input,
        .product-details textarea {
            width: 100%;
        }
    </style>

    <h1 class="mb-0">Book Detail</h1>
    <hr />
    <div class="product-detail-container">
        <div class="product-image">
            <img src="{{ asset('images/' . $productUser->product_code) }}" class="img-fluid" alt="{{ $productUser->title }}">
        </div>
        <div class="product-details">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $productUser->title }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $productUser->price }}" readonly>
                </div>
            </div>
           
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" placeholder="Description" readonly>{{ $productUser->description }}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
