@extends('base')

@section('content')
@include("productPage/header")

    <div class="container mt-3">
        <div class="row">
            <div class="col-3" style="height: 400px;width:250px;background-color:#F4A460;">
                
                    <div class="list-group">
                        @foreach ($category as $cat)
                            <a href="{{ route('categoryPage', ['cat_id'=> $cat->id]) }}" class="list-group-item list-group-item-action text-light fw-bolder" style="background-color:#F4A460;font-size:20px;">{{ $cat->cat_title }}</a>
                        @endforeach
                    </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-3">
                        
                        <img src="{{ asset("product_image/".$products->image) }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Title</th>
                                <th>{{ $products->title }}</th>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $products->category_id }}</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>{{ $products->brand }}</td>
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td>{{ $products->qty }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>₹-{{ $products->price }}</td>
                            </tr>
                            <tr>
                                <th>Discount Price</th>
                                <td>₹-{{ $products->discount_price }}</td>
                            </tr>
                            
                        </table>
                        <a href="#" onclick="window.print();" class="btn btn-outline-danger d-print-none mt-3 fw-bolder" style="margin-left:600px;font-size:21px;width:100px;">Print</a>

                        <h1>
                            <span class="text-danger">₹-{{ $products->discount_price }}</span> 
                            <span class="text-muted"><del>₹-{{ $products->price }}</del></span>
                        </h1>

                        <a href="" class="btn btn-outline-success btn-lg">Add to Cart</a>
                        <a href="" class="btn btn-warning btn-lg">Buy Now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection