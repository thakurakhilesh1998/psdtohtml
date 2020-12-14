<?php
ob_start();
session_start();
require_once '../../connection/db.php';
if (!isset($_GET['id'])) {
    header("Location:announcement.php?view=2");
}
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Announcement Details</title>
    <link href="../css/index.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <style>
        @media screen and (max-width:750px) {
            .forms form {
                width: 100% !important;
            }

            .table {
                width: 100% !important;
            }
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <!--Start of Header Section-->
    <section>
        <header>
            <div class="container-fluid nav-top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="#"><img src="../../images/logo.png" alt="logo images" style="height: 80px;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav ml-auto">
                                <span class="text-uppercase font-weight-bold text-white" style="font-size: 1.4rem;">Admin Dashboard</span>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link text-uppercase" href="../index.php" style="font-size: 1rem;">Home<span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </section>
    <!--End of Header Section-->

    <?php 
        $getA=mysqli_query($db,"SELECT * FROM `announcement` WHERE `a_id`='$id'");
        $getAR=mysqli_fetch_assoc($getA);
    ?>
    <!--Start of Add Announcement Section-->
    <div class="container my-5 d-flex flex-column justify-content-center align-items-center forms">
            <form class="w-50" action="#" method="GET">
                <input type="hidden" name="id" value=<?php echo $getAR['a_id'] ?>>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="text" class="form-control" id="date" aria-describedby="date" required name="date" readonly value=<?php echo date("Y-m-d") ?>>
                </div>
                <div class="form-group">
                    <label for="announcement">Announcement:</label>
                    <textarea class="form-control" id="announcement" placeholder="Announcement Text Here" name="msg" required rows="3"><?php echo $getAR['a_msg']?></textarea>
                </div>
                <button type="submit" class="btn" style="background-color: #1FC113!important;color: white!important;font-size: 1.2rem!important;" name="announce">Update</button>
            </form>
    </div>
    <!--End of Add Announcement Section-->
    <!--Start of Footer Section-->
    <footer class="mt-auto mb-0">
        <div class="container-fluid text-center footera">
            <p>&copy;2020 Oxford College. All right reserved.</p>
        </div>
    </footer>
    <!--End of Footer Section-->

    <?php
    if (isset($_GET['announce'])) {
        $a_id=$_GET['id'];
        $date = $_GET['date'];
        $msg = $_GET['msg'];
        $update = mysqli_query($db, "UPDATE `announcement` SET `a_date`='$date',`a_msg`='$msg' WHERE `a_id`='$a_id'");
        if ($update) {
            header("Location:../announcement.php?edits=f&view=v");
        } else {
            header("Location:../announcement.php?edite=e&view=v");
        }
    }
    ?>
    <?php ob_flush();?>
</body>

</html>