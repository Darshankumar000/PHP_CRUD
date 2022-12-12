<?php
    session_start();
    include_once 'conn.php';
    //echo $_SESSION['email'];
    if($_SESSION['email']!=null && $_SESSION['email']=='admin')
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Document</title>
</head>
<body>
    <h1>Welcome to Admin home page</h1>
   <?php echo $_SESSION['email']; ?> 
   <a href="logout.php"><button  class="btn btn-dark">Logout </button></a>

    <div class="row m-5 d-flex justify-content-around">
        <form class="form-group" method="POST" >
            <div class="d-inline-block">
                <lable class="form-lable ">Sort By:</lable>
            </div>
            <div class="d-inline-block">
                <select class="form-control" name="filter">
                    <option>--Select--</option>
                    <option value="Email">email</option>
                    <option value="Name">name</option>
                </select>
            </div>  
            <div class="d-inline-block">
                <button class="btn btn-dark ml-4" name="sort">Sort</button>
            </div>
        </form>
        <form class="form-group" method="POST" >
            <div class="d-inline-block">
                <lable class="form-lable ">Name:</lable>
            </div>
            <div class="d-inline-block">
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>  
            <div class="d-inline-block">
                <button class="btn btn-dark ml-4" name="search">Search</button>
            </div>
        </form>

    </div>
    <div class="container">
        <table class="table table-border table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Password</th>
                <th colspan=2>Manage</th>
            </tr>
            <?php

                if(isset($_POST['sort']))
                {
                    $greating=$_POST['filter'];
                    // echo $greating;
                    $query="select * from user order by $greating";
                }
                elseif(isset($_POST['search']))
                {
                    $searching=$_POST['name'];
                    $query="select * from user where Name like '%$searching%'";
                }
                else{

                    $query = "select * from user";
                }

                // $query = "select * from user where id = '".$_SESSION['id']."'";
                $res = mysqli_query($conn,$query);
                if(mysqli_num_rows($res)>0){
                    while($data = mysqli_fetch_array($res)){
            
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['Name']; ?></td>
                <td><?php echo $data['Mobile']; ?></td>
                <td><?php echo $data['Email']; ?></td>
                <td><?php echo $data['Password']; ?></td>
                <td><a href="adminUserUpdate.php?id=<?php echo $data['id'];?>"><i class="fa fa-pencil" style="font-size:24px"></i></a></td>
                <td><a href="adminUserDelete.php?id=<?php echo $data['id'];?>"><i class="fa fa-trash-o" style="font-size:24px;color:red"></a></i></td>
            </tr>
            <?php
                
                }
            }
            ?>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>
</html>

<?php
    }
    else{
        header("Location:login.php");
    }
?>