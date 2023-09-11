<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
    <title>Search Result</title>
</head>
<body>
    <div class="header-container">
        <span class="logo">Products</span>
        <ul class="navbar-container">
            <li class="nav-item active">
                <a class="nav-link" href="{{asset('Homepage')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('Homepage')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('category')}}">Categories</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{asset('product')}}">Products</a>
             </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('userProfile')}}">My Account</a>
              </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{route('cart.index')}}"><span><i class='bx bxs-cart-alt'></i></span>My Cart</a>
             </li>
         </ul>
    </div>

    <div class="home-container section" id="home">
        <div class="home-text">
          <h1>Ecommerce</h1>
          <h2>Take A Look At <br />Our Products</h2>
        </div>
        <div class="home-img">
          <img src="https://e7.pngegg.com/pngimages/500/602/png-clipart-web-development-e-commerce-online-shopping-business-software-development-ecommerce-web-design-text.png" alt="" />
        </div>
      </div>

    <div class="col-md-12">
        <div class="form-group">
            <form action="{{asset('search')}}" method="get" role="search">
                <div class="input-group">
                    <input class="form-control" name="search" placeholder="Search..." value="{{Request::get('search')}}">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="categories-container" id="categories">
        <div class="heading">
            <span>Products</span>
            <br>
            <br>
        </div>
        <div class="col-4">
            @if(Session::has('success'))
            <div class="alert alert-danger">{{Session::get('success')}}</div>
            @endif
            @foreach ( $searchProducts as $product )
                <img class='images'src="/images/{{$product->image}}"  alt="" >
                <h2 style="color: black">Name : {{$product->name}}</h2>
                <h4 style="color: black">Category :{{$product->category->name}}</h4>
                <p style="color: black">Price : <b>{{$product->price}}<b></p>
                    <form action="{{route('cart.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    {{-- <input type='number' name="quantity" placeholder="Enter the Quantity"> --}}
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
           @endforeach
      </div>
    </div>
    <footer class="footer">
        <p>&copy; 2023 My Categories Page. All rights reserved.</p>
    </footer>
</body>
</html>
