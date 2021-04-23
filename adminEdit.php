<?php
session_start();
$mysql = mysqli_connect("localhost", "root", "", "chat");
?>
<?php
if (isset($_GET['uid'])){
    $id = $_GET['uid'];
}
?>
<?php
//$id = $_GET['uid'];
//echo $id;
?>
<?php
if (isset($_POST['adminEditSumit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $password = $_POST['password'];
    
    $sqlEdit = "UPDATE admin_account SET firstName='$firstname', lastName='$lastname', userName='$username', mobile =' $mobile', email = '$email', password = '$password' WHERE id='$id'  ";
    $queryedit = mysqli_query($mysql,$sqlEdit);
    $rowEdit = mysqli_affected_rows($mysql);
    if ($rowEdit >0){
    }
    header('location:adminUser.php');
}
?>
<?php
$sql = "SELECT * FROM admin_account WHERE id =$id LIMIT 1 ";
$query = mysqli_query($mysql,$sql);
$row = mysqli_fetch_array($query);
?>
<!---->
<!--<form method="post" action="">-->
<!--    <table>-->
<!---->
<!--        <tr>-->
<!--            <td><lable>First Name</lable></td>-->
<!--            <td><input type="text" name="firstname" value="-->
<?php //echo $row['firstname'];?>
<!-- "></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td><lable>Last Name</lable></td>-->
<!--            <td><input type="text" name="lastname" value="-->
<?php //echo $row['lastname'];?>
<!-- "></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td><lable>Mobile</lable></td>-->
<!--            <td><input type="text" name="mobile" value="-->
<?php //echo $row['mobile'];?>
<!-- "></td>-->
<!--        </tr>-->
<!---->
<!---->
<!--        <tr>-->
<!--            <td><lable>Email</lable></td>-->
<!--            <td><input type="email" name="email" value="-->
<?php //echo $row['email'];?>
<!-- "></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>  <input type="submit" name="adminEditSumit"></td>-->
<!--        </tr>-->
<!--    </table>-->
<!---->
<!--</form>-->
<!---->

<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="images/diuIcon.png" type="image/ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin Edit</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <a class="navbar-brand" href="#">
        <img class="logo" src="images/diuIcon.png " height="40" width="40">
    </a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 m-auto">
            <li class="nav-item active">
                <a class="nav-link mr-3" href="adminDashboard.php">Home</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="notes.php">Notices</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link text-white" href="adminUser.php">Admin</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link text-white" href="index.php">chatroom</a>
            </li>

        
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="studentUser.php">Student</a>
            </li>


            <li class="nav-item px-2 float-left">
                <a class="nav-link text-white" href="adminlogout.php">Log out

                </a>
            </li>
        </ul>

</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="modal-header bg-info text-white">
                <h1 class="">Admin User Edit information
                </h1>
                <button class="close" data-dismiss="modal">&times;
                </button>
            </div>
            <form method="post" action="">
                <div class="modal-body">
                <div class="form-group">
                                    <label >First Name
                                    </label>
                                    <input type="name" name="firstname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Last Name
                                    </label>
                                    <input type="name" name="lastname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">User Name
                                    </label>
                                    <input type="name" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Mobile
                                    </label>
                                    <input type="number" name="mobile" class="form-control" value="<?php echo $row['mobile'];?> ">
                                </div>
                                <div class="form-group">
                                    <label >Email
                                    </label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?> ">
                                </div>
                                <div class="form-group">
                                    <label >Password
                                    </label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $row['password'];?> ">
                                </div>
                    <div class="modal-footer bg-fade">
                        <input type="submit" name="adminEditSumit"  class="btn btn-lg bg-success" >
                    </div>
            </form>
        </div>
    </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>