<?php
 include "db.php";
?>

<?php
class studentUserClass{
    function studentUserFunction(){
        $mysql = mysqli_connect("localhost", "root", "", "chat");
        if (isset($_POST['submitNewUserAdmin'])) {
            $fname = $_POST['sname'];
	        $sid = $_POST['sid'];
	        $sdep = $_POST['sdepartment'];
	        $sstatus = $_POST['status'];
	        $name = $_POST['name'];
	        $email = $_POST['email'];
	        $country = $_POST['country'];
	        $gender = $_POST['gender'];
	        $password = $_POST['password'];
            $acounttype = $_POST['action'];
            

            $sqliAddNewUser = "INSERT INTO user SET fullname='$fname', student_id='$sid', student_department='$sdep', student_status='$sstatus', name='$name', email='$email', country='$country', gender='$gender', password='$password', status='0', action='$acounttype ' ";
            $query =    mysqli_query($mysql,$sqliAddNewUser);
            header("location:studentuser.php");
        }
    }
}
$studentUserObject = new studentUserClass();
$studentUserObject->studentUserFunction();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/diuIcon.png" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Student List</title>
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


<button class="btn btn-lg btn-warning mt-5 ml-3" data-toggle="modal" data-target=".modal">Add New Student
        </button>
    </div>

    <div class="container-fluid  mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-warning ">
                        <h4 class="latest-post text-white">
                            <i class="fas fa-user-graduate mr-3 ">
                            </i>Student Users Account
                        </h4>
                    </div>
                    <table class="table table-striped table-bordered table-responsive-sm ">
                        <thead class="thead-dark ">
                        <tr>
                        <th>No
                            </th>
                            <th>Name
                            </th>
                            <th>Department
                            </th>
                            <th>StudentID
                            </th>
                            <th>Email
                            </th>
                            <th>status
                            </th>
                            <th>Countary
                            </th>
                            <th>Gender
                            </th>
                            <th>UserName
                            </th>
                            <th>Password
                            </th>
                            <th>Action
                            </th>

                            <th>Edit
                            </th>
                            <th>Delete
                            </th>
                        </tr>
                        </thead>
                        <?php
                        $mysql = mysqli_connect("localhost", "root", "", "chat");
                        $sqliMentorAccount = "SELECT * FROM user";
                        $queryMentorAccount = mysqli_query($mysql, $sqliMentorAccount);
                        while ($rowMentorAccount = mysqli_fetch_array($queryMentorAccount)) {
                            ?>
                            <tbody>
                            <tr>
                                <td>
                                    <?php echo $rowMentorAccount['id']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['fullname']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['student_department']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['student_id']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['email']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['student_status']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['country']; ?>
                                </td>

                                <td>
                                    <?php echo $rowMentorAccount['gender']; ?>
                                </td>

                                <td>
                                    <?php echo $rowMentorAccount['name']; ?>
                                </td>

                                <td>
                                    <?php echo $rowMentorAccount['password']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['action']; ?>
                                </td>
                               
                                <td>
                                    <a href="studentEdit.php?uid=<?php echo $rowMentorAccount['id']; ?>"
                                       class="btn btn-info">
                                        </i>Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="studentDelete.php?uid=<?php echo $rowMentorAccount['id']; ?>"
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

            <div class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-warning text-white">
                            <h1 class="">
                                <i class="fas fa-user-graduate mr-3 ">
                                </i>Add Now User
                            </h1>
                            <button class="close" data-dismiss="modal">&times;
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">

                           <label>Student Name</label>
								<input type="text" name="sname" placeholder="Student Name" class="form-control">
								<label>Student ID</label>
								<input type="text" name="sid" placeholder="Student ID" class="form-control">
								<label>Student Department</label>
								<input type="text" name="sdepartment" placeholder="Student Department" class="form-control">
								<label>Student status</label>
								<select name="status" class="form-control">
									<option disabled selected >Choose status</option>
									<option value="Undergratuate">Undergratuate</option>
									<option value="postgratuate">postgratuate</option>	
								</select>
								<label>User name</label>
								<input type="text" name="name" placeholder="User Name" class="form-control">
								<label>Email</label>
								<input type="text" name="email" placeholder="User Email" class="form-control">
								
                                <label>Country</label>
								<select name="country" class="form-control">
									<option disabled selected >Choose Country</option>
									<option value="somalia">Somalia</option>
									<option value="nigeria">Nigeria</option>
									<option value="djabuti">Djabuti</option>
									<option value="ethiopia">Ethiopia</option>
								</select>

								<label>Gender</label>
								<span style="margin-left: 40px; margin-right: 5px"> Male </span> <input type="radio" name="gender" value="male"  style="margin-right: 15px;">
								Female <input type="radio" name="gender" value="female" style="margin-left: 5px;"><br>
								
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" class="form-control">
                              
                                <label>Action</label>
								<select name="action" class="form-control">
									<option disabled selected >Choose </option>
									<option value="pending">pending</option>
									<option value="Active">Active</option>
									
								</select>
                               


                                <div class="modal-footer">
                                    <input type="submit" name="submitNewUserAdmin" value="Register"
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