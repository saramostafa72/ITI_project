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
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <title>My Cart</title>
</head>
<body>
    <div class="header-container">
        <span class="logo">My Cart</span>
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
          <h2>Take A Look At <br />Your <b>Cart<b></h2>
        </div>
        <div class="home-img">
          <img src="https://img.lovepik.com/free-png/20210918/lovepik-shopping-cart-png-image_400246975_wh1200.png" alt="" />
        </div>
      </div>

      <div class="heading">
        <span>The Products</span>
        <br>
        <br>
        @if(Session::has('success'))
    <div class="alert alert-danger">{{Session::get('success')}}</div>
    @endif
    </div>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">Product_Name</th>
            <th scope="col">Product_Price</th>
            <th scope="col">Category_Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Product_Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($carts as $cart)
            <tr>
                <td>{{ $cart->product->name }}</td>
                <td>{{ $cart->product->price }}</td>
                <td>{{ $cart->product->category->name }}</td>
                <td>{{ $cart->quantity }}</td>
              <td><img src="/images/{{$cart->product->image}}" alt="" width="300px" height="200px"></td>
              <td>
                <form action="{{route('cart.destroy',$cart->product->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="heading">
        <span> Total Price = {{ $total }} L.E</span>
        <br>
        <br>
    </div>

    <form action="{{route('order.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <button type="submit" class="btn" style="margin-left: 670px;margin-bottom:80px">Order Now</button>
    </form>
    <footer class="footer">
        <p>&copy; 2023 My Categories Page. All rights reserved.</p>
    </footer>
</body>
</html>
