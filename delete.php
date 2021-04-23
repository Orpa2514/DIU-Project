<?php 

include ("db.php");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from admin_account where id = '".$UserID."'";
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