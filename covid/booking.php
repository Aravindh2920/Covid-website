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
            function validate()
            {
                var today = new Date();
                d = document.f.date.value;
                today = Date.parse(today);
                d = Date.parse(d);
                if(d<today)
                {
                    alert("Date is not valid");
                    return false;
                }
                p1 = document.f.cnt.value;
                len1=p1.length;
                p2=document.f.aadhar.value;
                len2=p2.length;
                if(len1!=10)
                {
                    alert("Invalid Phone number!!");
                    return false;
                }
                if(len2!=12)
                {
                    alert("Invalid Aadhar number!!");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body class="vac">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse justify-content" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="home.php">Home</a>
                        <?php if(isset($_SESSION['username'])):?>
                        <a class="nav-link" href="search.php">Vaccination centers</a>
                        <?php else:?>
                        <a class="nav-link" href="login.php">Vaccination centers</a>
                        <?php endif;?>
                        <?php if(isset($_SESSION['username'])):?>
                        <a class="nav-link" href="booking.php">Book Your slots</a>
                        <?php else:?>
                        <a class="nav-link" href="login.php">Book Your Slots</a>
                        <?php endif;?>
                        <?php if(!isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="login.php">Login</a>
                        <?php else : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['username']; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
        <div class="container justify-content-left">
            <form name="f" action="bookslot.php" method="POST" onsubmit="return validate()">
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
                            <p class="h-blue">NAME</p>
                            <input class="inputbox" name="name" placeholder="FULL NAME" type="text" required>
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
                            <p class="h-blue">DATE</p> <input class="inputbox textmuted" name="date" type="date" required>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-12">
                        <div class="form-control d-flex flex-column">
                        <p class="h-blue">AADHAR NUMBER</p>
                            <input class="inputbox" name="aadhar" placeholder="AADHAR NUMBER" type="text" required>
                        </div>
                    </div>
                </div><br>  
                <button class="btn btn-primary form-control text-center" type="submit">BOOK</button>
                <?php
                    if(isset($_SESSION["error1"]))
                    {
                        echo '<script> alert("Select different date!!"); </script>';
                    }
                ?> 
            </form>
        </div>
    </body>

    </html>