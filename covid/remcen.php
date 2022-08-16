<?php
    session_start();      
    include('connection.php');  
    $name = $_POST['name'];  
    $id = $_POST['id'];
    $success = "Record removed Successful"; 
    $error = "No record found"; 

    $query = "select *from vaccentres where id='$id' and cname='$name'";
    $result = mysqli_query($con, $query);  

    if(mysqli_num_rows($result) == 0) {
        $_SESSION['error'] = $error;
        header("Location: removevaccen.php");
    }
    else {
        $query = "DELETE FROM vaccentres WHERE id='$id'";
        $_SESSION['success'] = $success; 
        mysqli_query($con, $query);
        header("Location: vaccen.php");
    }
?>  