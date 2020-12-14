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
        header("Location:../addnews.php");
    }
    $id=$_GET['id'];
    $delinfo=mysqli_query($db,"DELETE FROM `college_news` WHERE `id`='$id'");
    if($delinfo)
    {
        header("Location:../addnews.php?sn=s");
    }
    else
    {
        header("Location:../addnews.php?fn=f");
    }
   ob_flush(); 
?>