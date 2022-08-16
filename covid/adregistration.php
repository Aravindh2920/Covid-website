<?php      
    session_start();
    include('connection.php');  
    $name = $_POST['name']; 
    $username = $_POST['user']; 
    $password = $_POST['pass']; 
    $error = "username/password incorrect";
    $success = "Registration Successful"; 
      
        //to prevent from mysqli injection  
        $name = stripcslashes($name); 
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $name = mysqli_real_escape_string($con, $name);
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $query = "select *from userinfo where username='$username'";
        $result = mysqli_query($con, $query);  

        if(mysqli_num_rows($result) != 0) { // if user exists
          $_SESSION['error'] = $error;
          header("Location: adreg.php");
        }
        else {
          $query = "INSERT INTO admininfo (adname, adusername, adpassword) VALUES('$name', '$username', '$password')";
          $_SESSION['success'] = $success;
          mysqli_query($con, $query);
          header("Location: adlogin.php");
        }
?>  