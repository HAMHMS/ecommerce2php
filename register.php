<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="functions/auth/register.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="fname" placeholder="First Name">
                                        <?php if (isset($_SESSION['fname_error'])){ ?> 
                                            <span class="text-danger"><?php echo $_SESSION['fname_error'];
                                             unset($_SESSION['fname_error']); 
                                        ?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lname" placeholder="Last Name">
                                        <?php if (isset($_SESSION['lname_error'])){ ?> 
                                            <span class="text-danger"><?php echo $_SESSION['lname_error'];
                                             unset($_SESSION['lname_error']); 
                                        ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" placeholder="username">
                                        <?php if (isset($_SESSION['username_error'])){ ?> 
                                            <span class="text-danger"><?php echo $_SESSION['username_error'];
                                             unset($_SESSION['username_error']); 
                                        ?></span>
                                        <?php } ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                                    <?php if (isset($_SESSION['email_error'])){ ?> 
                                            <span class="text-danger"><?php echo $_SESSION['email_error'];
                                             unset($_SESSION['email_error']); 
                                            ?></span>
                                    <?php } ?>
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="address" placeholder="Address">
                                    <?php if (isset($_SESSION['address_error'])){ ?> 
                                            <span class="text-danger"><?php echo $_SESSION['address_error'];
                                             unset($_SESSION['address_error']); 
                                            ?></span>
                                    <?php } ?>
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="phone" placeholder="phone">
                                    <?php if (isset($_SESSION['phone_error'])){ ?> 
                                            <span class="text-danger"><?php echo $_SESSION['phone_error'];
                                             unset($_SESSION['phone_error']); 
                                            ?></span>
                                    <?php } ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                        <?php if (isset($_SESSION['password_error'])){ ?> 
                                            <span class="text-danger"><?php echo $_SESSION['password_error'];
                                             unset($_SESSION['password_error']); 
                                        ?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">    
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>