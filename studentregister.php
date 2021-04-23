
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
			$fun = "pending";
            

            $sqliAddNewUser = "INSERT INTO user SET fullname='$fname', student_id='$sid', student_department='$sdep', student_status='$sstatus', name='$name', email='$email', country='$country', gender='$gender', password='$password', status='0', action='$fun'";
            $query =    mysqli_query($mysql,$sqliAddNewUser);
            header("location:studentregister.php");
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

    <title>New Student Registeration </title>
  </head>
  <body style="background-color: #ffff99">

  <div>
  <button 
   class="btn btn-lg btn-warning mt-5 ml-3" data-toggle="modal" data-target=".modal">DIU Student
  </button>
 </div>
    
  <div class="container">
		<div class="row mt-4 py-4">
				<div class="col-md-8">
					<div class="panel panel-success">
						<div class="panel-heading text-center bg-warning py-3">
							Registration Form
						</div>
						<div class="panel-body">
						<form method="post" action="">
						<label>Student Name</label>
								<input type="text" name="sname" placeholder="Student Name" class="form-control">
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
						</div>
						<div class="panel-footer">
							<button type="submit" class="btn btn-warning my-2" name="submitNewUserAdmin"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Register </button>
							<button type="reset" class="btn btn-danger my-2" style="float: right;"> <span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;Reset</button>
						</div>
						<div class="panel-footer">
							<div align="center">
								Already Registered ? <a href="studentlogin.php"><font color="green"><b>Login Here</b></font></a>
							</div>
						</div>
					  </form>
					</div>
				</div>
				<div class="col-sm-4"></div>
		</div>
	</div>


	<div class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-warning text-white">
                            <h1 class="">
                                <i class="fas fa-user-graduate mr-3 ">
                                </i>Register As Diu Student 
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
                             
                               


                                <div class="modal-footer">
                                    <input type="submit" name="submitNewUserAdmin" value="Register"
                                           class="btn btn-lg bg-warning">
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
  
  </body>
</html>

<?php

if (isset($_POST['Submit'])) {

    $fname = $_POST['sname'];
	$sid = $_POST['sid'];
	$sdep = $_POST['sdepartment'];
	$sstatus = $_POST['status'];

	$name = $_POST['name'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];

	$query = "INSERT INTO newstudents SET fullname='$fname',student_department='$sdep', student_status='$sstatus', name='$name', email='$email', country='$country', gender='$gender', password='$password' ";
	$run = mysqli_query($con, $query);
	echo " <script> windows.open('studentregister.php'); </script>";

}	

?>