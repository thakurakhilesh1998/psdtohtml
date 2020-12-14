<?php 
    session_start();
    require_once '../../connection/db.php';
    if(!isset($_POST['username']) || !isset($_POST['password']))
    {
        header("Location:../login.php?f=f");
        die();
    }
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $adminlogin=mysqli_query($db,"SELECT * FROM `admin` WHERE `username`='$user' AND `pass`='$pass'");
    if(mysqli_num_rows($adminlogin)==1)
    {
        while($admin=mysqli_fetch_assoc($adminlogin))
        {
            $_SESSION['admin']=$admin;
        }
        
        header("Location:../index.php?s=s");
    }
    else
    {
        header("Location:../login.php?f=f");
    }
?>