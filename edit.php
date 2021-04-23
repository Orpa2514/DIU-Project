<?php 

include ("db.php");

$UserID = $_GET['GetID'];
$query = " select * from admin_account where id='".$UserID."'";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
    $UserID = $row['id'];
    $UserName = $row['firstName'];
    $lastName = $row['lastName'];
    $Name = $row['userName'];
    $mobile = $row['mobile'];
    $email = $row['email'];
    $password = $row['password'];
}
      

?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="images/diuIcon.png" type="image/ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>update Admin</title>
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
            <div class="modal-header bg-warning text-white">
                <h1 class="">Admin User Edit information
                </h1>
                <button class="close" data-dismiss="modal">&times;
                </button>
            </div>
            <form action="update.php?ID=<?php echo $UserID ?>" method="post">
            
                <div class="modal-body">
                <div class="form-group">
                                    <label >First Name
                                    </label>
                                    <input type="name" name="firstname" class="form-control" value="<?php echo $UserName ?>">
                                </div>
                                <div class="form-group">
                                    <label >Last Name
                                    </label>
                                    <input type="name" name="lastname" class="form-control"  value="<?php echo $lastName ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">User Name
                                    </label>
                                    <input type="name" name="username" class="form-control" value="<?php echo $Name ?>">
                                </div>
                                <div class="form-group">
                                    <label >Mobile
                                    </label>
                                    <input type="number" name="mobile" class="form-control" value="<?php echo $mobile ?>">
                                </div>
                                <div class="form-group">
                                    <label >Email
                                    </label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
                                </div>
                                <div class="form-group">
                                    <label >Password
                                    </label>
                                    <input type="text" name="password" class="form-control" value="<?php echo $password ?>">
                                </div>
                    <div class="modal-footer bg-fade">
                        <input type="submit" name="update"  class="btn btn-lg bg-warning" >
                    </div>
            </form>
        </div>
    </div>
</div>

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