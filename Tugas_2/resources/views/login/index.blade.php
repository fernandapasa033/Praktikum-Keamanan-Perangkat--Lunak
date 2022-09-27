<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/UNESA_Logo.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }} ">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login</title>

</head>
<body>
  <section class="material-half-bg">
    <div class="cover">
    </div>
    
  </section>
  <section class="login-content">
    <div class="login-box">
      
      <form class="login-form" method="post" action="/register">
        @csrf
        <a class="brand" href="../index.html">
          <div class="thumbnail mt-5"><center><img src="{{ URL::asset('images/UNESA_Logo.png') }}" height="100"/></center></div></a><p/>
          <div class="form-group">
            <input class="form-control" name="username" type="text" placeholder="Email" autofocus autocomplete="off">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <p class="semibold-text mb-2"><a href="/register">Create an Account</a></p>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="w-100 btn btn-lg btn-primary">Login</button>
            {{-- <button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOGIN</button> --}}
          </div>
        </form>
        <form class="forget-form" name="forgot" method="post">
          <a class="brand" href="index.php">
            <div class="thumbnail"><center><img src="images/UNESA_Logo.png" height="100"/></center></div></a><p/>
            <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="Email" >
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="iduser" placeholder="Identity Number">
            </div>
            <div class="form-group">
              <input class="form-control" type="password" id="password" name="password" placeholder="New Password">
            </div>
            <div class="form-group">
              <input class="form-control" type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
            </div>
            <div class="form-group btn-container">
              <button type="submit" name="change" onclick="return valid();" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET PASSWORD</button>
            </div>
            <div class="form-group mt-2">
              <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
            </div>
          </form>
        </div>
      </section>
      <!-- Essential javascripts for application to work-->
      <script src="login/js/jquery-3.2.1.min.js"></script>
      <script src="login/js/popper.min.js"></script>
      <script src="login/js/bootstrap.min.js"></script>
      <script src="login/js/main.js"></script>
      <!-- The javascript plugin to display page loading on top-->
      <script src="login/js/plugins/pace.min.js"></script>
      

      <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
  </html>