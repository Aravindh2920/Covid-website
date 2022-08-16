<html>
<?php
    session_start();   
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoWIN</title>
    <link rel="shortcut icon" type="image/png" href="Layer_1.png">
    <link rel=" stylesheet " href="styles.css ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css " rel="stylesheet " integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC " crossorigin="anonymous ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
    <link rel="stylesheet " href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
    <link rel="stylesheet " href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css " integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p " crossorigin="anonymous " />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js "></script>
    <link rel="stylesheet " href="https://www.w3schools.com/w3css/4/w3.css ">
    <style>
        .w3-button {
            width: 150px;
        }
    </style>
</head>
<body class="vac">
        <?php if(isset($_SESSION['username'])) : ?>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="vaccen.php">Home</a>
                            <?php if(!isset($_SESSION['username'])) : ?>
                            <a class="nav-link" href="adlogin.php">Login</a>
                            <?php else : ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo $_SESSION['username']; ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="adlogout.php">Logout</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </nav>    
                <div class="container main-content text-center what">
                    <h1 class="title ">VACCINATION CENTRE</h1>
                    <hr>
                    <div class="row ">
                        <div class="col">
                            <?php if(isset($_SESSION['username'])):?>
                                <div class="bt-sec ">
                                    <a href="addvaccen.php" target="_blank "><button class="bt bg-transparent">Add centres</button></a>
                                </div>
                            <?php else:?>
                                <div class="bt-sec ">
                                    <a href="adlogin.php" target="_blank "><button class="bt bg-transparent">Add centres</button></a>
                                </div>                            
                            <?php endif;?>
                        </div>
                        <div class="col">
                            <?php if(isset($_SESSION['username'])):?>
                                <div class="bt-sec ">
                                    <a href="removevaccen.php" target="_blank "><button class="bt bg-transparent">Remove centres</button></a>
                                </div>
                            <?php else:?>
                                <div class="bt-sec ">
                                    <a href="adlogin.php" target="_blank "><button class="bt bg-transparent">Remove centres</button></a>
                                </div>                            
                            <?php endif;?>
                        </div>
                        <div class="col">
                            <?php if(isset($_SESSION['username'])):?>
                                <div class="bt-sec ">
                                    <a href="dispvaccen.php" target="_blank "><button class="bt bg-transparent">Display centres</button></a>
                                </div>
                            <?php else:?>
                                <div class="bt-sec ">
                                    <a href="adlogin.php" target="_blank "><button class="bt bg-transparent">Display centres</button></a>
                                </div>                            
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <?php
                if(isset($_SESSION["success"]))
                    {
                        echo '<script> alert("Successful"); </script>';
                    }
                    ?>
            <?php else : ?>
            <script type="text/javascript">
                <!--
                window.location = "adlogin.php"
                //-->
            </script>
        <?php endif; ?>
        </body>    
</html>
<?php
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
?>