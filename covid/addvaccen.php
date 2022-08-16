<?php
    session_start();   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css " rel="stylesheet " integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC " crossorigin="anonymous ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
    <title>Document</title>
    <link rel="stylesheet" href="styleb.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        function validateForm() {
            p1 = document.f.cnt.value;
            len=p1.length;
            if(len==10)
            {
                return true;
            }
            else{
                alert("Invalid Phone number!!")
                return false;
            }
        }
    </script>
</head>
<body class="vac">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="vaccen.php">Home</a>
                    <?php if(!isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="register.php">Login</a>
                        <?php else : ?>
                        <a class="nav-link"href="#"><span><?php echo $_SESSION['username']; ?></span> <i class="bi bi-chevron-down"></i></a>
                        <a class="nav-link" href="logout.php">Logout</a>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="container justify-content-left">
        <form name="f" action="adcentre.php" method="POST" onsubmit="return validateForm()">
            <div class="row">
                <div class="col-12">
                    <div class="form-control d-flex flex-column">
                    <p class="h-blue">CENTER ID:</p>
                        <input class="inputbox" name="id" placeholder="CENTER ID" type="text" required>
                    </div>
                </div>
            </div><br>  
            <div class="row">
                <div class="col-md-6 col-12 mb-4">
                    <div class="form-control d-flex flex-column">
                        <p class="h-blue">CENTRE NAME</p>
                        <input class="inputbox" name="name" placeholder="CENTRE NAME" type="text" required>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                    <div class="form-control d-flex flex-column">
                        <p class="h-blue">PHONE NUMBER</p>
                        <input class="inputbox" placeholder="PHONE" name="cnt" type="text" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-control d-flex flex-column">
                        <p class="h-blue" style="text-align: center">VACCINE TYPE</p>
                        CoviShield<input type="radio" name="chk" value="Covishield" required><br>  
                        Covaxin<input type="radio" name="chk" value="Covaxin"><br>  
                        Sputnik<input type="radio" name="chk" value="Sputnik"><br>   
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-12">
                    <div class="form-control d-flex flex-column">
                    <p class="h-blue">ADDRESS</p>
                        <input class="inputbox" name="addr" placeholder="ADDRESS" type="textarea" required>
                    </div>
                </div>
            </div><br>  
            <button class="btn btn-primary form-control text-center" type="submit">REGISTER</button>
            <?php
                if(isset($_SESSION["error"]))
                {
                    echo '<script> alert("Centre already registered. Kindly check the centre ID."); </script>';
                }
                if(isset($_SESSION["success"]))
                {
                    echo '<script> alert("Registration Successful"); </script>';
                }
            ?> 
        </form>
    </div>
</body>

</html>