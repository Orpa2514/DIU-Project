<?php 

include ("db.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = " update admin_account set firstName = '".$firstname."', lastName='".$lastname."',userName='".$username."',mobile='".$mobile."',email='".$email."',password='".$password."' where id='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:adminUser.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
   


?>