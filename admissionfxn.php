<?php 
    require_once 'connection/db.php';
    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone']))
    {
        $name=$_GET['name'];
        $email=$_GET['email'];
        $phone=$_GET['phone'];
        $savedata=mysqli_query($db,"INSERT INTO `admission`(`name`, `email`, `phone`) VALUES ('$name','$email','$phone')");
        if($savedata)
        {
            header("Location:index.php?pass=pass");
            die();
        }
        else
        {
            header("Location:index.php?fail=f");
            die();
        }
    }

    else
    {
        header("Location:index.php?notnull=null");
        die();
    }
?>