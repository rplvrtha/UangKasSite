<?php
include("../../api.php");

$result=getData('http://localhost:8080/user/admin/1');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - KasQu</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-7 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 p-5">
                                <img src="../../assets/img/favicon.ico" class="login-img mb-4">
                                        <h1 class="h4 text-center text-gray-900 mb-5">Welcome Back!</h1>
                                    <form class="user" action="../auth/cek_login.php" method="post">
                                        <?php if (isset($_GET['error'])) { ?>
                                            <p class="small ml-3" style="color: red"><?php echo $_GET['error']; ?></p>
                                        <?php } ?>
                                            <input type="text" name="uname" class="form-group form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address">
                                            <input type="password" name="password" class="form-group form-control form-control-user" id="password" placeholder="Password">
                                            <div class="form-group custom-control custom-checkbox small">
                                                <input type="checkbox" name="show_password" class="custom-control-input" id="show_password">
                                                <label class="custom-control-label" for="show_password">Show Password</label>
                                            </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block mt-4" value="Login">
                                    </form>
                                    <hr>
                                    <div class="text-center m-4">
                                        <span class="small">Forgot Password?</span> <a href="https://api.whatsapp.com/send?phone=<?= $result['telp'] ?>&text=Halo%20Admin!,%0ATolong%20Reset%20Password%20Pada%20User%20Ini:%0A*NO INDUK*%20%20%20:%0A*NAMA*%20%20:%0A%0ATerimakasih." class="small" target="_blank" rel="noopener noreferrer"> Call Admin</a>
                                    </div>
                               </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script>
    // Mendapatkan nilai dari checkbox
    const show_password = document.getElementById("show_password");
    const passwd =document.getElementById("password")
    show_password.addEventListener('click', function (){
    if (show_password.checked) {
        passwd.type='text'
    }else{
        passwd.type='password'
    }
    })
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin-2.min.js"></script>

</body>

</html>