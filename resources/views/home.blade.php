
                
@extends('base')

@section('content')
@include("productPage/header")
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 shadow-lg" style="height: 400px;width:250px;background-color:#F4A460;">
                <div class="list-group">
                    @foreach ($category as $cat)
                        <a href="{{ route('categoryPage', ['cat_id'=> $cat->id]) }}" class="list-group-item list-group-item-action text-light fw-bold text-left" style="background-color:#F4A460;font-size:20px;"><u>{{ $cat->cat_title }}</u></a>
                    @endforeach
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-4">
                            <div class="card">
                                <img src="{{ asset("product_image/".$item->image) }}" class="w-100" style="object-fit: cover;height:220px" alt="">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $item->title}}</h6>
                                    <h6 class="card-title">Brand: {{ $item->brand}}</h6>
                                    <h6 class="card-title">Price :-₹{{ $item->price}}</h6>
                                    <h6 class="card-title">Discount Price :-₹{{ $item->discount_price}}</h6>
                                    <h6 class="card-title">Qty -:{{ $item->qty}}</h6>
                                    <p class="small text-muted">{{ $item->category }}</p>
                                    <a href="{{ route('oneView',['pro_id'=> $item->id]) }}" class="btn btn-outline-danger">Add to Cart</a>
                                    <a href="" class="btn btn-warning" style="margin-left: 15px;">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            
            </div>
            
        </div>
    </div>
@endsection