@extends('base')

@section('content')
@include("productPage/header")


        <div class="container">
            <div class="row">
                <div class="col-3 mt-2" style="height: 400px;width:250px;background-color:#F4A460;border: 4px solid #F4A460;">
                    @include('side')
                </div>
                <div class="col-9 mt-2">
                    <div class="row">
                        <div class="col-4">
                            <div class="card bg-danger text-white">
                                <div class="card-body">
                                    <h2 class="display-2">{{$total_products}}</h2>
                                    <h6 class="text-white">Total Products</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h2 class="display-2">{{$total_users}}</h2>
                                    <h6 class="text-white">Total User</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <h2 class="display-2">30+</h2>
                                    <h6 class="text-white">Total Total Product</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection