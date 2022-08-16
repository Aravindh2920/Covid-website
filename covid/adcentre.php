<?php      
    session_start();
    include('connection.php');  
    $name = $_POST['name']; 
    $id = $_POST['id']; 
    $phone = $_POST['cnt'];
    $lang = $_POST['chk']; 
    $addr = $_POST['addr'];
    $error = "username/password incorrect";
    $success = "Registration Successful"; 
      
        //to prevent from mysqli injection  
        $name = stripcslashes($name); 
        $phone = stripcslashes($phone);  
        $addr = stripcslashes($addr);  
        $id = stripcslashes($id);  
        $id = mysqli_real_escape_string($con, $id);
        $name = mysqli_real_escape_string($con, $name);
        $phone = mysqli_real_escape_string($con, $phone);  
        $addr = mysqli_real_escape_string($con, $addr);  
      
        $query = "select *from vaccentres where id='$id'";
        $result = mysqli_query($con, $query);  

        if(mysqli_num_rows($result) != 0) { // if user exists
          $_SESSION['error'] = $error;
          header("Location: addvaccen.php");
        }
        else {
          $query = "INSERT INTO vaccentres (id, cname, contact, Type, address ) VALUES('$id', '$name', '$phone', '$lang', '$addr')";
          $_SESSION['success'] = $success; 
          mysqli_query($con, $query);
          header("Location: vaccen.php");
        }
?>  