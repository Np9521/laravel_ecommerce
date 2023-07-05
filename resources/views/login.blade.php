@extends('layout')
@section('content')
<form action="home.blade.php" method="post">
  

  <div class="container custam-login">
  <div class="row">
    <div class="col-sm-4">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button class="btn btn-primary">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</div>
</div>
  </div>

</form>
@endsection