<?php      
    session_start();
    include('connection.php');  
    $id = $_POST['id']; 
    $name = $_POST['name']; 
    $phone = $_POST['cnt']; 
    $date = $_POST['date'];
    $aadhar = $_POST['aadhar'];  
    $error1 = "Select different date";
    $error = "username/password incorrect";
    $success = "Registration Successful"; 

    $id = stripcslashes($id); 
    $name = stripcslashes($name); 
    $phone = stripcslashes($phone);  
    $aadhar = stripcslashes($aadhar);

    $id = mysqli_real_escape_string($con, $id);
    $name = mysqli_real_escape_string($con, $name);
    $phone = mysqli_real_escape_string($con, $phone);  
    $aadhar= mysqli_real_escape_string($con, $aadhar);  

        $q1 = "select id from vaccentres where id = '$id'";
        $query = "select *from slots where aadhar='$aadhar'";
        $d = "select * from slots where date='$date'";

        $dr = mysqli_query($con, $d);
        $result = mysqli_query($con, $query);  
        $res = mysqli_query($con, $q1);

        $rowcount = mysqli_num_rows( $dr );
        $data=mysqli_fetch_assoc($dr);
        if(mysqli_num_rows($res) == 0 ) {
            $_SESSION['error'] = $error;
            header("Location: booking.php");
        }
        if(mysqli_num_rows($result) != 0 ) { 
            $_SESSION['error'] = $error;
            header("Location: booking.php");
        }
        if($rowcount==10){
            echo '<script>alert("Select a different date")</script>';
            $_SESSION['error1'] = $error1;
            header("Location: booking.php");
        }
        else {
          $query = "INSERT INTO slots (id, name, phone, date, aadhar) VALUES('$id', '$name', '$phone', '$date', '$aadhar')";
          $_SESSION['success'] = $success;
          mysqli_query($con, $query);
          header("Location: home    .php");
        }
?>  