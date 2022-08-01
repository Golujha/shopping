<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('homepage') }}" class="navbar-brand" style="font-size: 23px;">Shop</a>
        <div class="col g-5">
            

            <div class="navbar-nav">
                <div class="col">
                    <a href="{{ route('product.create') }}" class="btn btn-outline-warning float-end fw-bold text-light" style="margin-right: 30px;">Add a Product</a>
                </div>
                    
                    @guest
                        <a href="{{route('login')}}" class="nav-item nav-link text-light" style="margin-right: 30px;">My Account</a>
                    @endguest
    
                    @auth
                        <a href="" class="nav-item nav-link text-light" style="margin-right: 30px;">{{Auth::user()->name}} s'Account</a>
                        <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
                    @endauth
                    
    
                
            </div>
            
            
        </div>
        
        
    </div>
</nav>
