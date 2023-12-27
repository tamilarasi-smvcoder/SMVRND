<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMV Research and Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>

</head>
  <body class="vh-100 overflow-hidden">
    <?php
          if(isset($_SESSION['status']) && $_SESSION['status']!='')
          {
                            
      ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Alert! </strong><?php echo $_SESSION['status']; ?>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                            unset($_SESSION['status']);
                          }
                          ?>
                    </div>  
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
          <img src="Images/logo.png" alt="" width="100" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="course.php">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contact</a>
            </li>
          </ul>
                              

  <!-- Login Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">
  Login
</button>
<div class="m-2"></div>
<!-- Signup Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#signupModal">
  Sign Up
</button>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog model-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        <!-- Login Form -->
        <div class="my-form #003f24">
          <h2>Login</h2>
          <form id="loginForm">
            <div class="form-group mb-3 mt-4">
              <label for="loginUsername">Username</label>
              <input type="text" class="form-control" id="loginUsername" placeholder="Enter your Email ID">
            </div>
            <div class="form-group mb-3 mt-4">
              <label for="loginPassword">Password</label>
              <input type="password" class="form-control" id="loginPassword" placeholder="Enter your Password">
            </div>
            <button type="button" class="btn btn-warning" onclick="login()">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog model-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        <!-- Signup Form -->
        <div class="my-form #003f24">
          <h2>SignUp</h2>
          <form id="signupForm" action="db.php" method="post">
            <div class="form-group mb-3 mt-4">
              <label for="signupFirstname">First Name</label>
              <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" autocomplete="off">
              <p class="text-danger"><?php if(isset($errors['f'])) echo $errors['f'];?></p>
            </div>
            <div class="form-group mb-3 mt-4">
              <label for="signupSecondname">Second Name</label>
              <input type="text" class="form-control" name="second_name" placeholder="Enter Second Name" autocomplete="off">
              <p class="text-danger"><?php if(isset($errors['s'])) echo $errors['s'];?></p>
            </div>
            <div class="form-group mb-3 mt-4">
              <label for="signupEmail">Email</label>
              <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Enter email">
              <p class="text-danger"><?php if(isset($errors['e'])) echo $errors['e'];?></p>
            </div>
            <div class="form-group mb-3 mt-4">
              <label for="signupPassword">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter Password">
              <p class="text-danger"><?php if(isset($errors['p'])) echo $errors['p'];?></p>
            </div>
            <div class="form-group mb-3 mt-4">
              <label for="signupCPassword">Confirm Password</label>
              <input type="password" class="form-control" name="re_password" placeholder="Re-Enter Password">
              <p class="text-danger"><?php if(isset($errors['r'])) echo $errors['r'];?></p>
            </div>
            
            <button type="submit" name="add" class="btn btn-warning lobtn">SignUp</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function login() {
    // Implement your login logic here
    console.log('Login button clicked');
  }

  function signup() {
    // Implement your signup logic here
    console.log('Sign Up button clicked');
  }
</script>

        </div>
      </div>
    </nav>
  
    <div class="content neonText">
        <h1>SMV SOFTWARE TECHNOLOGY</h1>
        <p>Research and Development</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>