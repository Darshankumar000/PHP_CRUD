<?php
    session_start();
    //echo $_SESSION['uname'];
    if($_SESSION['email']!=null)
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to home page</h1>
    <?php echo $_SESSION['email']; ?>
    <br>
    <a href="logout.php"><button >Logout </button></a>

    <br>
    <br>
    <br>
    <br>
    <h1>Cookies Value:</h1>
    <lable>Name:</lable>
    <?php echo isset($_COOKIE['email'])?$_COOKIE['email']:""; ?>
    <br>
    <lable>Password:</lable>
    <?php echo isset($_COOKIE['password'])?$_COOKIE['password']:""; ?>
    <br>
    <br>
</body>
</html>

<?php
    }
    else{
        header("Location:login.php");
    }
?>