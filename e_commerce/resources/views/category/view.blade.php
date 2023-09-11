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
    <title>Categories</title>
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
          <h2>Take A Look At <br />Our <b>Categories<b></h2>
        </div>
        <div class="home-img">
          <img src="https://e7.pngegg.com/pngimages/500/602/png-clipart-web-development-e-commerce-online-shopping-business-software-development-ecommerce-web-design-text.png" alt="" />
        </div>
      </div>

      <div class="heading">
        <span>All Categories</span>
        <br>
        <br>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Category_Id</th>
            <th scope="col">Category_Name</th>
            <th scope="col">Category_Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td><img src="/images/{{$category->image}}" alt="" width="300px" height="200px"></td>
              <td>
                <form action="{{route('category.update',$category->id)}}" >
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <br>
                <form action="{{route('category.destroy',$category->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <a href="{{route('category.create')}}">
        <button type="button" class="btn" style="margin-left: 670px;margin-bottom:80px">Add New Category</button>
      </a>
    <footer class="footer">
        <p>&copy; 2023 My Categories Page. All rights reserved.</p>
    </footer>
</body>
</html>
