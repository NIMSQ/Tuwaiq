@extends('layouts.app')
@section('content')

<style>
        body {
            background-color: #f8f9fa;
        }
        .product-image {
            max-height: 350px;
            object-fit: contain;
        }
        .product-details {
            padding: 20px;
        }
    </style>

<div class="container my-5">
        <div class="row g-4">
            <!-- صورة المنتج -->
            <div class="col-md-6">
                <img src="{{$product->image}}" class="img-fluid product-image rounded shadow-sm" alt="صورة المنتج">
            </div>
            <!-- تفاصيل المنتج -->
            <div class="col-md-6 product-details">
                <h2 class="mb-3">{{$product->name}} </h2>
                <p class="text-muted mb-3">{{$product->categories_id}} </p>
                <h3 class="text-success mb-4">{{$product->price}} ر.س</h3>
                <p class="mb-4">{{$product->description}}</p>
                
                <!-- زر الإضافة إلى السلة -->
                <div class="row">
                    <div class="col">
                        <a href="{{route('shopping.cart')}}" class="btn btn-primary btn-lg">إضافة إلى السلة</a>
                    </div>
                    <div class="col">
                        <a href="{{route('shopping.CheckOut')}}" class="btn btn-success btn-lg"> الذهاب الى صفحة الدفع </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection