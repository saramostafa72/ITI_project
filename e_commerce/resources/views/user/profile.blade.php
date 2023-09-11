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
    <title>My Account</title>
</head>
<body>

    <div class="header-container">
        <span class="logo">My Account</span>
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
          <h1>Welcome</h1>
          <h2>{{$user->name}}</h2>
        </div>
        <div class="home-img">
          <img src="https://www.superiortechnology.com/wp-content/uploads/2018/10/How-to-Keep-Your-E-Commerce-System-Funtioning-at-Optimum-Capacity.png" alt="" />
        </div>
      </div>

      <div class="heading">
        <span>Your Information</span>
        <br>
        <br>
    </div>

      <table class="table" >
        <thead>
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Orders</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td><a href="{{route('order.index')}}">My Orders</a></td>
                <td>
                <form action="{{route('user.logout',$user->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">LogOut</button>
                 </form>
                </td>
            </tr>
        </tbody>
      </table>

    <br>
    <br>
    <footer class="footer">
            <p>&copy; 2023 My Homepage. All rights reserved.</p>
    </footer>
</body>
</html>
