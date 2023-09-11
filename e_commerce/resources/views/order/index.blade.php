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
    <title>Orders</title>
</head>
<body>
    <div class="header-container">
        <span class="logo">My Orders</span>
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
          <h2>Take A Look At <br />Your <b>Orders<b></h2>
        </div>
        <div class="home-img">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRopFRm2q0eeHu_Ii1gQyj_T48J47Np0LqRWA&usqp=CAU" alt="" />
        </div>
      </div>

      <div class="heading">
        <span>My Orders</span>
        <br>
        <br>
    </div>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">Order_ID</th>
            <th scope="col">Order_Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->price }}</td>
                <td><a href="{{route('productsOrder',$order->id)}}">Show Products</a></td>
           </tr>
          @endforeach
        </tbody>
      </table>

      <a href="{{asset('userProfile')}}">
        <button type="button" class="btn" style="margin-left: 670px;margin-bottom:80px">Return</button>
      </a>
    <footer class="footer">
        <p>&copy; 2023 My Categories Page. All rights reserved.</p>
    </footer>
</body>
</html>
