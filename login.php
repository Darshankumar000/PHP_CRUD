<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Page</title>
    <style>
        .bg_color {
            background-color: rgb(251, 172, 184);
        }
        
        .box_color {
            background-color: azure;
            /* display: flex;
            align-items: center;*/
        }
    </style>
</head>

<body class="bg_color">
    <section class=" vh-100">
        <div class=" container py-5 h-100 ">
            <div class=" row h-100   justify-content-center align-items-center ">
                <div class=" col-12 col-md-8 col-lg-6 col-xl-5 ">
                    <div class="box_color card rounded">
                        <div class="card-body p-5 ">
                            <form class="m-3" action="auth.php" method="post" >
                                <p class="h3 text-center mb-4 text-dark ">Sign In</p>
                                <div class="form-group">
                                    <?php
                                        if(isset($_GET['error']))
                                        {
                                            echo "<p style='color:red'><b>".$_GET['error']."</br></p>";
                                        }
                                    ?>
                                    <label for="email">Email address:</label>
                                    <input type="text" name="uname" class="form-control" placeholder="Enter email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label"></label>
                                    <input class="form-check-input" type="checkbox"> Remember me
                                </div>
                                <center>
                                    <button  class="btn btn-dark btn-block" name="login">Login</button>
                                </center>
                                <p class="text-center mt-3">Don't have an account <a href="registration.php"><b>Sign Up</b></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>