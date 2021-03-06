<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no"><!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">


  <title>Register</title>
  <!--Firebase-->
  <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-firestore.js"></script>

  <script type="text/javascript" src="js/register.js"></script>
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/b20f2a5bee.js" crossorigin="anonymous"></script>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS -->
  <link href="css/login.css" rel="stylesheet">
  <!-- running script -->
  <script defer src="js/register.js" type="text/javascript"></script>

  <!-- sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.11.1/dist/sweetalert2.all.min.js"
    integrity="sha256-d2y12cVyBzRuX+Qwbe6O9dlWfw0hnpxyE/T1yYfEPDg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<style>
  body.swal2-shown>[aria-hidden="true"] {
    filter: blur(10px);
  }

  body>* {
    transition: 0.1s filter linear;
  }
</style>

<body class="text-center">

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <a href="./"><img src="assets/images/foodzilla.png" alt="Foodzilla Logo"></a>
            <h2 class="mt-1 pb-2">Sign Up</h2>
            <form class="form-signin" autocomplete="off">

              <div class="form-label-group">
                <input autocomplete="false" type="text" id="inputUsername" name="username" class="form-control"
                  placeholder="Username" required autofocus>
                <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                <input autocomplete="false" type="email" id="inputEmail" name="email" class="form-control"
                  placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                  required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="reinputPassword" class="form-control" placeholder="Re-enter Password"
                  required>
                <label for="reinputPassword">Re-enter Password</label>
              </div>

              <hr class="my-4">

            </form>
            <button class="btn btn-lg btn-signin btn-block text-uppercase" type="submit" onclick="a()"><i
                class="fas fa-sign-in-alt mr-2"></i>Sign up</button>
            <p class="text-center mt-2">Already have an account? <a href="./login.php">Sign In</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>