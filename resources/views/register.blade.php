
@extends('base')

@section('content')



   <div class="container">
    <div class="row">
        <div class="col-5 mx-auto mt-2">
            <div class="card mt-5">
                <div class="card-header text-center fw-bold " style="font-size: 24px;">Create an Shopping Account</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="mt-3">Name</label>
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your name" class="form-control mt-3">
                            @error('name')
                                <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{old('email')}}" placeholder="Enter your Email" class="form-control mt-3">
                            @error('email')
                                <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" value="{{old('contact')}}" placeholder="Enter your Contact" class="form-control mt-3">
                            @error('contact')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" value="{{old('password')}}" placeholder="Enter your Password" class="form-control mt-3">
                            @error('password')
                            <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <input type="submit" value="Create An Account" class="btn btn-danger w-100">
                        </div>
                    </form>
                    <a href="{{route('login')}}" class=" float-end text-decoration-none text-center"><u>Already have an account?</u></a>
                </div>
            </div>
        </div>
    </div>
   </div>
</body>
</html>
@endsection