<?php

session_start();

$mysql = mysqli_connect("localhost", "root", "", "chat");
if (isset($_GET['uid'])){
    $id = $_GET['uid'];

    $sqliMentorDelete =" DELETE FROM notices WHERE id ='$id'";
    $queryMentorDelete =mysqli_query($mysql,$sqliMentorDelete);
    if ($queryMentorDelete){
        header('location:notes.php');
    }
}
?>
