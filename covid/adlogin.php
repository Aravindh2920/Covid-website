<?php
    session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="lrstyle.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Login Page</title>
</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="admin.hp">Home</a>
                        <a class="nav-link" href="adlogin.php">Login</a>
                        <a class="nav-link" href="adreg.php">Register</a>
                    </div>  
                </div>
            </div>
        </nav>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form action="adauth.php" method="POST">

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">User Name
                                        </label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="user"
                                            required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="pass"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button> <span><a href="adreg.php">Create an account</a></span>
                                </div>
                        </div>

                        <?php
                            if(isset($_SESSION["error"]))
                            {
                                echo '<script>
                                alert("Username/Password is wrong");
                                </script>';
                            }
                            if(isset($_SESSION["success"]))
                            {
                                echo '<script>
                                alert("Registration Successful");
                                </script>';
                            }
                        ?> 

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>

</body>

</html>

<?php
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
?>