<?php
    include 'conn.php';
    session_start();

    $email = $_POST["email"];
    $pass = $_POST["password"];

    //echo $uname;
    //echo $pass;
    if(isset($_POST['login']))
    {
        if($email =="admin" && $pass=="admin")
        {
            $_SESSION['email']=$email;
            header("Location: adminUser.php");
        }
        else{
            $sql="select * from user where Email='$email' and Password='$pass'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($res);
            if(is_array($row))
            {
                $_SESSION['email']=$email;
                header("Location: home.php");
            }
        }
    }
    else
    {
        header("Location: login.php?error=Incorrect username or password");
    }

    
    
?>