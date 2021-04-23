<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/diuIcon.png" type="image/ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>admin Login</title>
</head>
<body>

<?php
            if (isset($_GET['error'])) 
							{
		    echo "<font color='red'><p align='center'><b>".@$_GET['error']. "</b></p>";
							} 
			if (isset($_GET['logout'])) 
							{
		    echo "<font color='green'> <p align='center'><b>".@$_GET['logout']. "</b></p>";
							} 

			if (isset($_POST['Submit'])) {
			    
			    $email = $_POST['email'];
			    $password = $_POST['password'];

				$result = mysqli_query($conn , "SELECT * from user where email='$email' and password='$password'");
					while($row = mysqli_fetch_assoc($result))
					{
						$_SESSION['email'] = $row['email'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
					}
					if(mysqli_num_rows($result)>0){			
						$query = mysqli_query($conn, "UPDATE user SET status = '1' WHERE email = '$email' ");
						header('location: adminDashboard.php');
						}
					else {
                        echo '<div class="alert bg-danger text-white alert-dismissible text-center" role="alert">
                        <strong>Please!</strong>The username and password you entered did not match our records. Please try again!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
						}	
                          }

                          ?>


  
<h1 class="text-center mt-5 text-black-50">Admin Account
</h1>
<div class="container pt-3">
    <div class="row justify-content-sm-center">
        <div class="col-sm-10 col-md-6">
            <div class="card border-info ">
                <div class="card-header bg-warning text-white ">Sign in to continue
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h4 class="text-center">Admin
                            </h4>
                            <img src="images/diuIcon.png " height="100" width="100">
                        </div>
                        <div class="col-md-8">
                        <form method="post" action="">
                              <div class="form-group">
                              <input type="text" class="form-control mb-2" placeholder="Username" name="email">
                                <input type="password" class="form-control mb-2" placeholder="Password" name="password">
                                <input class="btn btn-lg btn-warning btn-block mb-1" type="submit" name="Submit">
                                <!--                                <a href="#" class="float-right">Need help?</a>-->
                              </div>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>