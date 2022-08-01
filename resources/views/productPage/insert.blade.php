@extends('base')

@section('content')
@include("productPage/header")

    <div class="container mt-3">
        <style>
            .text{
                padding: 12px 20px;
                border: 1px solid rgb(146, 22, 22);
                border-radius: 4px;
                box-sizing: border-box;
            }
        </style>
        <div class="row">
            <div class="col-3" style="height: 400px;width:250px;background-color:#F4A460;">
                @include('side')
            </div>
            <div class="col-1"></div>
            <div class="col-7 shadow">
                <div class="row">
                    <div class="col">
                        <h4 class="text-success">Insert Product</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                            <div class="mb-3 col">
                                <label for="" style="font-size: 20px;">Title</label>
                                <input type="text" class="form-control mt-2" name="title" placeholder="Enter your title" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);">
                                @error('title')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label for="" style="font-size: 20px;">Brand</label>
                                <input type="text" class="form-control mt-2" name="brand" placeholder="Enter your brand" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);">
                                @error('brand')
                                    <p class="text-danger small">{{ $message }}</p>
                                 @enderror
                                    
                            </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="" style="font-size: 20px;">Qty</label>
                                    <input type="text" class="form-control mt-2" name="qty" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);">
                                    @error('qty')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="" style="font-size: 20px;">Price</label>
                                    <input type="text" class="form-control mt-2" name="price" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);">
                                    @error('price')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" style="font-size: 20px;">Discount_price</label>
                                <input type="text" class="form-control mt-2" name="discount_price" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);">
                                @error('discount_price')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" style="font-size: 20px;">Category</label>
                                <select class="form-select mt-2" name="category_id" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);">
                                    <option value="">select category</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->cat_title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" style="font-size: 20px;">Image</label>
                                <input type="file" name="image" class="form-control mt-2" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);">
                                
                            </div>
                            <div class="mb-3">
                                <label for="" style="font-size: 20px;">Description</label>
                                <textarea rows="5" name="description" class="form-control mt-2" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);"></textarea>
                                @error('description')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
@endsection