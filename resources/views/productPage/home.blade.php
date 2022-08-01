@extends('base')

@section('content')
@include("productPage/header")

    <div class="container mt-2">
        <div class="row">
            <div class="col-3 shadow-lg" style="height: 400px;width:250px;background-color:#F4A460;border: 4px solid #F4A460;">
                @include('side')
            </div>
            <div class="col-9">
                <div class="col">
                    <a href="{{ route('homepage') }}" class="btn btn-primary float-end" style="height: 45px;">Homepage</a>
                </div>
                <div class="row">
                    <div class="col-9">
                        <h5>Manage Products</h5>
                    </div>
                </div>
                <table class="table shadow table-bordered table-striped">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>price</th>
                        <th>Qty</th>
                        <th>Image</th>
                        <th>action</th>
                    </tr>
                    @foreach ($products as $pro)
                        <tr>
                            <td>{{ $pro->id }}</td>
                            <td>{{ $pro->title }}</td>
                            <td>{{ $pro->brand }}</td>
                            <td>{{ $pro->discount_price }} <del>{{ $pro->price }}</del></td>
                            <td>{{ $pro->qty }}</td>
                            <td>
                                <img width="50px" src="{{ asset("product_image/".$pro->image) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('product.delete', ['id'=> $pro->id]) }}" class="btn btn-danger">X</a>
                                <a href="{{ route('product.edit',['id'=>$pro->id])}}" class="btn btn-info">edit</a>
                                <a href="" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            
        </div>
    </div>
@endsection