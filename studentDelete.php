<?php

$mysql = mysqli_connect("localhost", "root", "", "chat");
if (isset($_GET['uid'])){
    $id = $_GET['uid'];
    $sqliStudentDelete ="DELETE FROM user WHERE id ='$id'";
    $queryStudentDelete =mysqli_query($mysql,$sqliStudentDelete);
    if ($queryStudentDelete){
        header('location: studentUser.php');
    }
}
?>