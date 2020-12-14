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
        header("Location:../admission.php");
    }
    $id=$_GET['id'];
    $delinfo=mysqli_query($db,"DELETE FROM `new_admission` WHERE `id`='$id'");
    if($delinfo)
    {
        header("Location:../admission.php?sd=s");
    }
    else
    {
        header("Location:../admission.php?fd=f");
    }
    ob_flush();
?>