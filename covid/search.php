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
</head>
<body class="vac">
    <script>
        $("#n").hide();
    </script>
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse justify-content" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="home.php">Home</a>
                    <a class="nav-link" href="search.php">Vaccination centers</a>
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
        <form name="f" action="searchdb.php" method="POST">    
            <div class="row">
                <div class="col-md-2 pe-0 col-sm-12">
                    <div class="btn radio-btn mb-3"> <label class="radio"> <input type="radio" value="id" name="book" checked> CENTRE ID <span></span> </label> </div>
                </div>
                <div class="col-md-4 pe-0 col-sm-12">
                    <div class="btn radio-btn mb-3"> <label class="radio"> <input type="radio" value="name" name="book"> CENTRE NAME <span></span> </label> </div>
                </div>
            </div>      
            <script>
                $(document).ready(function(){
                    $('input:radio[name="book"]').change(function(){
                        if($(this).val() == 'id'){
                            $("#n").hide();
                            $("#id").show();
                        }
                        else{
                            $("#n").show();
                            $("#id").hide();
                        }
                    });
                });
            </script>
            <div class="row" id="n">
                <div class="col-12">
                    <div class="form-control d-flex flex-column">
                    <p class="h-blue">CENTRE NAME:</p>
                        <input class="inputbox" name="name" placeholder="CENTRE NAME" type="text">
                    </div>
                </div>
            </div><br>    
            <div class="row" id="id">
                <div class="col-12">
                    <div class="form-control d-flex flex-column">
                    <p class="h-blue">CENTRE ID:</p>
                        <input class="inputbox" name="id" placeholder="CENTRE ID" type="text">
                    </div>
                </div>
            </div><br> 
            <button class="btn btn-primary form-control text-center" type="submit">SEARCH</button>
            <?php
                if(isset($_SESSION["error"]))
                {
                    echo '<script> alert("Centre ot found!!!"); </script>';
                }         
            ?> 
        </form>
    </div>
    <center>
        <table id="dis">
            <?php     
                include('connection.php'); 
                $sql = "SELECT * FROM vaccentres";
                $result = $con->query($sql);
                echo "<tr><th>Id</th><th>Name</th><th>Address</th><th>Contact</th><th>Type</th></tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr><td>$row[id]</td><td>$row[cname]</td><td>$row[address]</td><td>$row[contact]</td><td>$row[Type]</td></tr>";
                }
            ?>
        </table>
    </center>
</body>

</html>