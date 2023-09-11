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
    <title>Homepage</title>
</head>
<body>

    <div class="header-container">
        <span class="logo">Homepage</span>
        <ul class="navbar-container">
            <li class="nav-item active">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('category')}}">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('product')}}">Products</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="{{asset('userProfile')}}"> My Account</a>
              </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{route('cart.index')}}"><span><i class='bx bxs-cart-alt'></i></span>My Cart</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{asset('login')}}">Login</a>
              </li>
         </ul>
    </div>

      <div class="home-container section" id="home">
        <div class="home-text">
          <h1>Ecommerce</h1>
          <h2>Shop Anytime <br />You Want</h2>
          <a href="#about" class="btn">Learn more</a>
        </div>
        <div class="home-img">
          <img src="https://www.superiortechnology.com/wp-content/uploads/2018/10/How-to-Keep-Your-E-Commerce-System-Funtioning-at-Optimum-Capacity.png" alt="" />
        </div>
      </div>

      <div class="about-container section" id="about">
        <div class="about-img">
          <img src="https://blog.hubspot.com/hs-fs/hubfs/ecommerce_1.webp?width=595&height=400&name=ecommerce_1.webp" alt="" />
        </div>
        <div class="about-text">
          <span>About US</span>
          <h2> We Make Your Life Easier</h2>
          <p>
            We are a digital platform that facilitates
            online transactions between
            businesses and consumers.
          </p>
        </div>
      </div>
      <br>
      <br>
      <div class="categories-container" id="categories">
        <div class="heading">
            <span>Categories</span>
            <br>
            <h2>New Looks and great price</h2>
            <br>
        </div>
        <div class="row">
          <div class="col-4">
            <img src="https://www.color-meanings.com/wp-content/uploads/female-clothes-stylist-workplace.jpeg" style="height:300px; border-radius: 25px; padding:10px"/>
            <h2 style="color: black;padding:10px">Women Clothes</h2>
          </div>
          <div class="col-4">
            <img src="https://img.freepik.com/free-photo/young-handsome-man-choosing-clothes-shop_1303-19720.jpg"style="height:300px; border-radius: 25px;padding:10px"/>
            <h2 style="color: black;padding:10px">Men Clothes</h2>
          </div>
          <div class="col-4">
            <img src="https://media.timeout.com/images/105945067/750/422/image.jpg" style="height:280px; border-radius: 25px;padding:10px;" />
            <h2 style="color: black;padding:15px">Kids Clothes</h2>
          </div>
        </div>

        {{-- <div class="row">
          <div class="col-4">
            <button type="button" class="btn btn-primary">Show</button>
          </div>
          <div class="col-4">
            <button type="button" class="btn btn-primary">Show</button>
          </div>
          <div class="col-4">
            <button type="button" class="btn btn-primary">Show</button>
          </div>
        </div> --}}
      </div>
    <br>
    <br>
    <footer class="footer">
            <p>&copy; 2023 My Homepage. All rights reserved.</p>
    </footer>
</body>
</html>
