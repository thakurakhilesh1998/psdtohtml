<?php 
    ob_start();
    session_start();
    require_once '../../connection/db.php';
    if(!isset($_SESSION['admin']))
    {
        header("Location:../login.php");
    }
    if(!isset($_GET['id']))
    {
        header("Location:../announcement.php");
    }
    $id=$_GET['id'];
    $delinfo=mysqli_query($db,"DELETE FROM `announcement` WHERE `a_id`='$id'");
    if($delinfo)
    {
        header("Location:../announcement.php?sd=s");
    }
    else
    {
        header("Location:../announcement.php?fd=f");
    }
   ob_flush(); 
?>