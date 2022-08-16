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
    </body>