<?php
    
    include_once 'conn.php';
    $uname=$_POST['uname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    

    if($pass == $cpass)
    {
        $query = "insert into user values('','$uname','$mobile','$email','$pass')";
   // echo $query;
        if(mysqli_query($conn,$query))
        {
            // echo"Register Succsessfully..............";
            header("Location:login.php");
        }
        else{
            echo"Error:".mysqli_error();
        }
    }
    
?>