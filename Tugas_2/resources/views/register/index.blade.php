<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/UNESA_Logo.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Registrasi</title>
  
</head>
<body>
  <section class="material-half-bg">
    <div class="cover">
      <div id="particles-js"></div>
    </div>
  </section>
  <section class="login-content">
    <div class="login-box">
      <form class="login-form" method="post" action="/register">
        @csrf
       <a class="brand" href="index.php">
        <div class="thumbnail"><center><img src="{{ URL::asset('images/UNESA_Logo.png') }}" height="100"/></center></div></a><p/>
        <div class="form-group">
          <input class="form-control @error('username')is-invalid @enderror" name="username" type="text" placeholder="Username" autofocus required="required" autocomplete="off">
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <input class="form-control @error('email')is-invalid @enderror" type="email" placeholder="Email" name="email" placeholder="Email" autofocus required="required" autocomplete="off">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
          <input type="number" class="form-control @error('nomer')is-invalid @enderror" id="floatingInput" name="nomer" placeholder="Enter No Hp" required autocomplete="off" pattern="(\+62|62|0)8[1-9][0-9]{6,12}$">

          @error('nomer')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
      </div>
        
        <div class="form-group">
          <input class="form-control @error('password')is-invalid @enderror" type="password" required="required" name="password" placeholder="Password" autocomplete="off">
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="row form-group mb-4">
          <div class="col-sm-12">
                  <input type="datetime-local" class="form-control" placeholder="Enter Date">
          </div>
      </div>
      <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
      </script>
        <div class="form-group btn-container">
          <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>REGISTER</button>
        </div><p/>
        <div class="form-group mt-2">
          <p class="semibold-text mb-0">Account Already?<a href="/"> Sign in</a></p>
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
  
  <!-- particles js file -->
  <script src="login/js/particles.js"></script>
  <script src="login/js/app.js"></script>
  
  <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
  </html>