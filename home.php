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

</body>
</html>

<?php
    }
    else{
        header("Location:login.php");
    }
?>