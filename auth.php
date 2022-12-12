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

            if($row=mysqli_fetch_array($res))
            {
                $_SESSION['email']=$email;
                // echo $_POST['remember'];
                if(isset($_POST['remember']))
                {
                    setcookie("email",$row['Email'],time()+(10),"/");
                    setcookie("password",$row['Password'],time()+(10),"/");

                }
                header("Location: home.php");
            }
        }
    }
    else
    {
        header("Location: login.php?error=Incorrect username or password");
    }



?>