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
          <h1>Welcome</h1>
          <h2>Admin</h2>
        </div>
        <div class="home-img">
          <img src="https://st3.depositphotos.com/7865540/13292/i/450/depositphotos_132922972-stock-photo-view-of-tablet-with-icons.jpg" alt="" />
        </div>
      </div>

      <div class="container">
          <div class="col-md-3">
            <a href="{{route('category.view')}}">
            <button type="button" class="btn btn-secondary">View Categories</button>
            </a>
          </div>
          <div class="col-md-3">
            <a href="{{route('product.view')}}">
            <button type="button" class="btn btn-secondary">View Products</button>
            </a>
          </div>
          <div class="col-md-3">
            <a href="{{route('order.view')}}">
            <button type="button" class="btn btn-secondary">View Orders</button>
            </a>
          </div>
          <div class="col-md-3">
            <a href="{{route('user.view')}}">
            <button type="button" class="btn btn-secondary">View Users</button>
            </a>
          </div>
      </div>


      <footer class="footer">
        <p>&copy; 2023 My Categories Page. All rights reserved.</p>
    </footer>
</body>
</html>
