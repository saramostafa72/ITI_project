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
    <title>Users</title>
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
          <h2>Take A Look At <br />The <b>Users<b></h2>
        </div>
        <div class="home-img">
          <img src="https://media.istockphoto.com/id/923079848/photo/online-shopping.jpg?s=612x612&w=0&k=20&c=74cW4LDlcWRKlMMs49RKg2_-9lsCetPni4fhKjW7RhQ=" alt="" />
        </div>
      </div>

      <div class="heading">
        <span>All Users</span>
        <br>
        <br>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">User_Id</th>
            <th scope="col">User_Name</th>
            <th scope="col">User_Email</th>
            <th scope="col">Orders</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
               @if($user->userType != 'admin'){
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td><a href="{{route('order.adminIndex',$user->id)}}">Show Orders</a></td>
              <td>
                <form action="{{route('user.destroy',$user->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
        }
            @endif
          @endforeach
        </tbody>
      </table>

    <footer class="footer">
        <p>&copy; 2023 My Categories Page. All rights reserved.</p>
    </footer>
</body>
</html>
