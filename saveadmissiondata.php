<?php 
    require_once 'connection/db.php';
    $name=$_GET['a_name'];
    $email=$_GET['a_email'];
    $phone=$_GET['a_phone'];
    $address=$_GET['a_address'];
    $program=$_GET['a_program'];
    $comment=$_GET['comment'];
    $savedata=mysqli_query($db,"INSERT INTO `new_admission`(`name`, `email`, `phone`, `address`, `program`, `comments`) 
    VALUES ('$name','$email','$phone','$address','$program','$comment')");
    if($savedata)
    {
        header("Location:index.php?as=s");
    }
    else
    {
        header("Location:index.php?af=f");
    }
?>