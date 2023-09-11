<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/first.css')}}">
    <title>Login</title>
</head>
<body>
  <section style="background-color: #006D5B;;">
    <div class="container">
      <h1>Login</h1>
      <form action="{{route('loginForm')}}" method="post">
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div class="form-group">
          <label for="email"><b>Email</b></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
          @if ($errors->has('email'))
          <span style="color: rgb(233, 135, 44)">
          <b> {{ $errors->first('email') }}</b>
          </span>
          @endif
        </div>
        <div class="form-group">
          <label for="password"><b>Password</b></label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
          @if ($errors->has('password'))
          <span style="color: rgb(233, 135, 44)">
          <b>  {{ $errors->first('password') }} </b>
          </span>
          @endif
        </div>
        <div class="d-flex justify-content-center">
          <input type="submit" class="btn btn-primary btn-lg" value="Login" name="login">
        </div>
        <p class="text-center mt-5 mb-0">Doesn't have an account? <a href="/registeration"><u style="color: #BCB88A">Register here</u></a></p>
      </form>
    </div>
    </section>
</body>
</html>

