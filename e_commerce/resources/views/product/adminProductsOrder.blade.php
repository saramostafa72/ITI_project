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
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <title>Admin Page</title>
    <style>
        .container {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 20vh;
        }
        .button {
          margin: 0 10px;
          padding: 20px 20px;
        }
      </style>
</head>
<body>

    <div class="header-container">
        <span class="logo">Admin Page</span>
        <ul class="navbar-container">
            <li class="nav-item active">
                <a class="nav-link" href="{{asset('Homepage')}}">Home</a>
              </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('adminHome')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('category.view')}}">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('product.view')}}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('order.view')}}">Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.view')}}">Users</a>
              </li>
         </ul>
    </div>

    <div class="home-container section" id="home">
        <div class="home-text">
          <h1>Ecommerce</h1>
          <h2>Take A Look At <br />User <b>Products<b></h2>
        </div>
        <div class="home-img">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRopFRm2q0eeHu_Ii1gQyj_T48J47Np0LqRWA&usqp=CAU" alt="" />
        </div>
      </div>

      <div class="heading">
        <span>User Products</span>
        <br>
        <br>
    </div>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">Product_Name</th>
            <th scope="col">Category_Name</th>
            <th scope="col">Product_Price</th>
            <th scope="col">Product_Image</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->price }}</td>
              <td><img src="/images/{{$product->image}}" alt="" width="300px" height="200px"></td>
            </tr>
          @endforeach
        </tbody>
      </table>

      {{-- <a href="{{route('order.view')}}">
        <button type="button" class="btn" style="margin-left: 670px;margin-bottom:80px">Return</button>
      </a> --}}
    <footer class="footer">
        <p>&copy; 2023 My Categories Page. All rights reserved.</p>
    </footer>
</body>
</html>
