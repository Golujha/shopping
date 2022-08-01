@extends('base')

@section('content')
@include("productPage/header")
    <div class="container mt-2">
        <div class="row">
            <div class="col-3 shadeow-lg" style="height: 400px;width:250px;background-color: #F4A460;">
                @include('side')
            </div>
            <div class="col-9">
        <div class="row">
            <div class="col-3 shadow">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h5">Create Category</h2>
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">title</label>
                                <input type="text" name="cat_title" class="form-control mt-3" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);">
                                @error('cat_title')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">description</label>
                                <textarea name="cat_description" class="form-control mt-3" rows="5" style="padding: 8px 12px; border: 3px solid rgb(231, 217, 217); border-radius: 4px; box-sizing:border-box;background-color:rgb(248, 246, 243);"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7 shadow">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>action</th>
                    </tr>
                    @foreach ($category as $cat)
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>{{ $cat->cat_title }}</td>
                            <td>{{ $cat->cat_description }}</td>
                            <td>
                                <a href="{{ route('category.update',['id'=>$cat->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('category.delete',['id'=>$cat->id]) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col">
                <a href="{{ route('homepage') }}" class="btn btn-primary float-end" style="height: 45px;">Homepage</a>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection