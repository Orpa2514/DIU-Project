<?php
include ("db.php");

?>

<?php
class adminUserClass{
    function adminUserFunction(){
        $mysql = mysqli_connect("localhost", "root", "", "chat");

        if (isset($_POST['submitNewUserAdmin'])) {
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sqliAddNewUser = "INSERT INTO admin_account(firstname,lastname,username,mobile,email,password) 
VALUES('$firstname','$lastname','$username','$mobile','$email')";
            $query =    mysqli_query($mysql,$sqliAddNewUser);
            header("location:adminDashboard.php");
        }

        
    }
}

class adminUserInheritance extends adminUserClass {


}




$adminUserObject = new adminUserInheritance();
$adminUserObject->adminUserFunction();
?>
<?php
if(isset($_POST['submitNotices'])) {
    $noticesDescription = $_POST['noticesDescription'];
    $result = mysqli_query($mysql, "INSERT INTO notices(description) VALUES('$noticesDescription')");
    header('location:notesPhp.php');
}
?>



<?php 

include ("db.php");
    $query = " select * from admin_account ";
    $result = mysqli_query($con,$query);

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

    <title>Admin users</title>
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

<button class="btn btn-lg btn-warning mt-5 ml-3" data-toggle="modal" data-target=".modal">Add New Admin
        </button>
    </div>
    <div class="container-fluid  mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-warning ">
                        <h4 class="latest-post text-white">
                            <i class="fas fa-users-cog mr-1">
                            </i>Admin Users Account
                        </h4>
                    </div>
                    <table class="table table-striped table-bordered table-responsive-sm ">
                        <thead class="thead-dark ">
                        <tr>
                            <th>No
                            </th>
                            <th>First Name
                            </th>
                            <th>lastName
                            </th>
                            <th>UserName
                            </th>
                            <th>mobile
                            </th>
                            <th>Email
                            </th>
                            <th>password
                            </th>
                            <th>Delete
                            </th>
                            <th>Edit
                            </th>
                        </tr>
                        <?php         
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['id'];
                                        $UserName = $row['firstName'];
                                        $lastName = $row['lastName'];
                                        $Name = $row['userName'];
                                        $mobile = $row['mobile'];
                                        $email = $row['email'];
                                        $password = $row['password'];
                            ?>
                            </tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $lastName ?></td>
                                        <td><?php echo$Name?></td>
                                        <td><?php echo  $mobile ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo  $password ?></td>

                                        <td><a class="btn btn-primary" href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td><a class="btn btn-danger" href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>    
                            </tr>
                            <?php 
                                    }  
                            ?>                                                                    

                    </table>
                </div>
            </div>
            <div class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-warning text-white">
                            <h1 class="">
                                <i class="fas fa-users-cog mr-1">
                                </i>Add Now User
                            </h1>
                            <button class="close" data-dismiss="modal">&times;
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
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
                                    <input type="number" name="mobile" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Email
                                    </label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Password
                                    </label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                
                                <div class="modal-footer">
                                    <input type="submit" name="submitNewUserAdmin" value="submit"
                                           class="btn btn-lg bg-warning">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

    <div class="card bg-warning text-center  fixed-bottom">

<div class="card-footer text-white">
    <p class="lead"> All Rights Reserved @ Nucmaan Abdihakiin  & Ayesha Rahman Orpa</p>
</div>
</div>

  </body>
</html>