
<?php
 include "db.php";
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
if (isset($_POST['studentEditSumit'])){
           $id = $_GET['uid'];
            $fname = $_POST['sname'];
	        $sid = $_POST['sid'];
	        $sdep = $_POST['sdepartment'];
	        $sstatus = $_POST['status'];
	        $name = $_POST['name'];
	        $email = $_POST['email'];
	        $country = $_POST['country'];
	        $gender = $_POST['gender'];
	        $password = $_POST['password'];
          $action = $_POST['Action'];

    $sqlEdit = " update user set fullname = '".$fname."', student_department='".$sdep."',student_id='".$sid."',email='".$email."',student_status='".$sstatus."',gender='".$gender."',country='".$country."',name='".$name."',password='". $password."',action='". $action."' where id ='".$id."'"; 
    $queryedit = mysqli_query($con,$sqlEdit);
    $rowEdit = mysqli_affected_rows($con);
    if ($rowEdit >0){
    }
    header('location:studentUser.php');
}
?>
<?php
$sql = "SELECT * FROM user WHERE id =$id LIMIT 1 ";
$query = mysqli_query($con,$sql);
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/diuIcon.png" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit Student info<</title>
  </head>
  <body>

  <div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="modal-header bg-warning text-white">
                <h1 class="">Student User Edit information
                </h1>
                <button class="close" data-dismiss="modal">&times;
                </button>
            </div> 
                <div class="modal-body"  >
                <form action="" method="POST">

                <label>Student Name</label>
                <input type="text" name="sname" class="form-control" value="<?php echo $row['fullname'];?> ">

                <label>Student Department</label>
								<input type="text" name="sdepartment" class="form-control" value="<?php echo $row['student_department'];?> ">

								<label>Student ID</label>
								<input type="text" name="sid" class="form-control" value="<?php echo $row['student_id'];?> ">
								
                <label>Email</label>
								<input type="text" name="email" class="form-control" value="<?php echo $row['email'];?> ">

								<label>Student status</label>

								<select name="status"  class="form-control">

                  <option  value="<?php echo $row['student_status'];?>"> <?php echo $row['student_status'];?></option>
									<option value="Undergratuate">Undergratuate</option>
									<option value="postgratuate">postgratuate</option>
									
								</select>

                <label>Country</label>

                  <select name="country" class="form-control">

									<option disabled value="<?php echo $row['country'];?>"> <?php echo $row['country'];?></option>
									<option value="somalia">Somalia</option>
									<option value="nigeria">Nigeria</option>
									<option value="djabuti">Djabuti</option>
									<option value="ethiopia">Ethiopia</option>

								</select>

                <label>Gender</label>
                
                <select name="gender" class="form-control">

									<option value="<?php echo $row['gender'];?>"> <?php echo $row['gender'];?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>


								<label>User name</label>
								<input type="text" name="name" class="form-control" value="<?php echo $row['name'];?> ">
		
                
                <label>Password</label>
								<input type="text" name="password" class="form-control" value="<?php echo $row['password'];?> ">

                <label>Action</label>

               <select name="Action" class="form-control">

                 <option  value="<?php echo $row['action'];?>"> <?php echo $row['action'];?></option>
                <option value="Active">Active</option>
                 <option value="Pending">Pending</option>
                 </select>


                    <div class="modal-footer bg-fade">
                    <input type="submit" name="studentEditSumit"  class="btn btn-lg bg-warning" >
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