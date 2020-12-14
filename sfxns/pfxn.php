<?php 
    require_once '../connection/db.php';
    if (isset($_GET['subscribe'])) {
        $s_email = $_GET['s-email'];
        $savesub = mysqli_query($db, "INSERT INTO `subscribe`(`email`) VALUES ('$s_email')");
        if ($savesub) {
            header("Location:../placements.php?sub=s");
        } else {
            header("Location:../placements.php?subf=f");
        }
    }
?>