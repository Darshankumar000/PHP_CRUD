<?php
    session_start();
    if(isset($_POST["uname"]) && isset($_POST["password"]))
    {
        $uname = $_POST["uname"];
        $pass = $_POST["password"];

    //     echo $uname;
    //    echo $pass;
        if($uname =="admin" && $pass=="admin")
        {
            $_SESSION['uname']=$uname;
            header("Location: home.php");
        }
        else{
            header("Location: login.php?error=Incorrect username or password");
        }
    }else{
        echo "enter username or password";
     }
?>