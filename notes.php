<?php

include ("db.php");

?>
<?php

class addNotesClass
{

    function addNotesFunction()
    {
        $mysql = mysqli_connect("localhost", "root", "", "chat");
        if (isset($_POST['submitNotices'])) {
            //  $noticeTitle = $_POST['noticeTitle'];
            $noticesDescription = $_POST['noticesDescription'];
            $addnotes = "INSERT INTO notices(description) VALUES('$noticesDescription')";
            $query = mysqli_query($mysql, $addnotes);
            header('location:notes.php');

        }
    }
}

class addNotesInheritance extends addNotesClass {


}

$addNotesObject = new addNotesInheritance();
$addNotesObject->addNotesFunction();

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

    <title>Notice</title>
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

<div>
   
<button class="btn btn-lg btn-warning mt-5 ml-3" data-toggle="modal" data-target=".modal">Add Notices
</button>
</div>
<div class="container-fluid ">
<div class="row">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-header bg-warning ">
                <h4 class="latest-post text-white">
                    <i class=" fas fa-exclamation-circle mr-2">
                    </i>Notices
                </h4>
            </div>
            <table class="table table-striped table-bordered table-responsive-sm ">
                <thead class="thead-light ">
                <tr>
                    <th>No
                    </th>
                    <th>Description
                    </th><th>Deleted
                    </th>
                </tr>
                </thead>
                <?php
                $sqliNotices = "SELECT * FROM notices";
                $queryNotices = mysqli_query($con,$sqliNotices);
                while ($rowNotices = mysqli_fetch_array($queryNotices)){
                    ?>
                    <tbody>
                    <tr>
                        <td>
                            <?php echo $rowNotices['id'];?>
                        </td>
                        <td>
                            <?php echo $rowNotices['description'];?>
                        </td>
                        <td>
                            <a href="notesDeleted.php?uid=<?php echo $rowNotices['id']; ?>"
                               class="btn  btn-danger">Delete
                            </a>
                        </td>
                    </tr>
                    </tr>
                    </tbody>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<div class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h1 class="">
                    <i class=" fas fa-exclamation-circle mr-1">
                    </i>Notice
                </h1>
                <button class="close" data-dismiss="modal">&times;
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="notes.php">
                    <div class="form-group">
                        <label>Description
                        </label>
                        <textarea name="noticesDescription" class="form-control" rows="4" cols="50" >
              </textarea>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submitNotices" value="Add" class="text-white btn btn-block btn-lg bg-warning" >
                    </div>
                </form>
            </div>
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

    <div class="card bg-warning text-center  fixed-bottom">

<div class="card-footer text-white">
    <p class="lead"> All Rights Reserved @ Nucmaan Abdihakiin  & Ayesha Rahman Orpa</p>
</div>
</div>

  </body>
</html>