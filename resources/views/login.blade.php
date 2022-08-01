@extends('base')

@section('content')
@include("productPage/header")

<h2 class="text-center text-primary">Login Account?</h2>
    <div class="card col-4 mx-auto mt-3" style="border: 0px;">
        <div class="card-body">
            <form action="{{route('login')}}" method="POST">
                @csrf
                        
                <div class="mb-3 col">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control mt-3" placeholder="Enter your Email" value="{{old('email')}}">
                    @error('email')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                        
                <div class="mb-3 col">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control mt-3" placeholder="Enter your Password" value="{{old('password')}}">
                    @error('password')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                   
                <div class="mb-3">
                    <input type="submit" value="Login Here" class="btn btn-success w-100">
                </div>
                @if(session("error"))
                    <div class="col-12">
                            <div class="alert alert-danger text-danger">
                            {{session("error")}}
                        </div>
                    </div>
                @endif
    
            </form>
            <a href="{{route('register')}}" class="small float-end text-decoration-none">New User? Create an Account</a>

        </div>
    </div>

@endsection