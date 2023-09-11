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
    <style>
        form {
          width: 500px;
          margin: 0 auto;
          padding: 20px;
          border: 3px solid #ccc;
          margin-bottom: 30px;
        }
        label{
            color: #000;
            font-size: 20px;
        }
        input {
          width: 100%;
          padding: 10px;
          margin-bottom: 10px;
          border: 2px solid #ccc;
        }
        input[type="submit"] {
          background-color: #000;
          color: #fff;
        }
        input[type="submit"]:hover {
        background-color: rgb(233, 135, 44);
        }
    </style>
    <title>Products</title>
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
          <h2>Shop Anytime <br />You Want</h2>
        </div>
        <div class="home-img">
          <img src="https://www.superiortechnology.com/wp-content/uploads/2018/10/How-to-Keep-Your-E-Commerce-System-Funtioning-at-Optimum-Capacity.png" alt="" />
        </div>
    </div>


      <div class="heading">
        <span>Edit Products</span>
        <br>
        <br>
      </div>

     <form action="{{route('product.edit',$product->id)}}" method="post" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <label for="name">Product Name :</label>
      <input type="text" name="name" id="name" value="{{$product->name}}">
      <label for="price">Product Price :</label>
      <input type="text" name="price" id="price" value="{{$product->price}}">
      {{-- <label for="category_name">Category Name :</label>
      <input type="text" name="category_name" id="category_name" value="{{$product->category->name}}"> --}}
      <label for="name">Product Image :</label>
      <input type="file" name="image" value="{{$product->image}}">
      <input type="submit" >
  </form>

    <footer class="footer">
        <p>&copy; 2023 My Categories Page. All rights reserved.</p>
    </footer>
</body>
</html>

