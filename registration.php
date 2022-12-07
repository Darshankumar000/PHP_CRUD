
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration Page</title>

    <style>
        .bg_color {
            background-color: rgb(251, 172, 184);
        }
        
        .box_color {
            background-color: azure;
        }
    </style>
</head>

<body class="bg_color">
    <section class=" vh-100">
        <div class=" container py-5 h-100 ">
            <div class=" row h-100   justify-content-center align-items-center ">
                <div class=" col-12 col-md-8 col-lg-6 col-xl-5 ">
                    <div class="box_color card rounded">
                        <div class="card-body p-4 ">
                            <form class="m-3 " action="insert_reg.php" role="form" method="post" >
                                <p class="h3 text-center mb-4 text-dark ">Sign Up</p>
                                <div class="form-group">
                                    <label for="text">User Name:</label>
                                    <input type="text" name="uname" class="form-control" placeholder="Enter Username" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="text">Mobile No:</label>
                                    <input type="text" name="mobile" class="form-control" placeholder="Enter email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Confirm Password:</label>
                                    <input type="password" name="cpassword" class="form-control" placeholder="Enter password" id="pwd">
                                </div>

                                <center>
                                    <button type="submit" class="btn btn-dark ">Submit</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
