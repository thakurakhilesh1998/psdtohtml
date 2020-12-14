<?php
ob_start();
require_once '../connection/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Placements</title>
    <link href="css/index.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css">
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
                        <a class="navbar-brand" href="#"><img src="../images/logo.png" alt="logo images" style="height: 80px;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav ml-auto">
                                <span class="text-uppercase font-weight-bold text-white" style="font-size: 1.4rem;">Admin Dashboard</span>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link text-uppercase" href="index.php" style="font-size: 1rem;">Home<span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </section>
    <!--End of Header Section-->

    <!--Start of Add Announcement Section-->
    <div class="container my-5 d-flex justify-content-center forms">
        <form class="w-50" action="#" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <label for="Student Name">Student Name:</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" required name="name" >
            </div>
            <div class="form-group">
                <label for="Student Pass Rate">Student Pass Rate:</label>
                <input type="text" class="form-control" id="passrate" name="passrate" required rows="3">
            </div>
            <div class="form-group">
                <label for="Profile Image">Select Student Profile Image</label>
                <input type="file" class="form-control" name="stu_image" required accept="image/x-png,image/gif,image/jpeg">
            </div>
            <div class="form-group">
                <label for="Comapany Image">Select Company Placed Image:</label>
                <input type="file" class="form-control" name="com_image" required accept="image/x-png,image/gif,image/jpeg">
            </div>
            <button type="submit" class="btn" style="background-color: #1FC113!important;color: white!important;font-size: 1.2rem!important;" name="events">Add Events</button>

            <?php if (isset($_GET['savee'])) : ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?php echo $_GET['savee'] ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['savef'])) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    Event Added successfully!!!
                </div>
            <?php endif; ?>
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
    if (isset($_POST['events'])) {
            $maxsize=204800;
            $stu_image = $_FILES['stu_image']['name'];
            $com_image = $_FILES['com_image']['name'];
            if (($_FILES['image']['size'] < $maxsize) && ($_FILES['com_image']['name'])<$maxsize) {
                $target_dir = '../images/placement/';
                $target_file1 = $target_dir . basename($_FILES["stu_image"]["name"]);
                $target_file2 = $target_dir . basename($_FILES["com_image"]["name"]);
                // Select file type
                $stu_image_type = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
                $com_image_type = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
                // Valid file extensions
                $extensions_arr = array("jpg", "jpeg", "png", "gif");
                if ((in_array($stu_image_type, $extensions_arr)) && (in_array($com_image_type, $extensions_arr))) {
                    $name = $_POST['name'];
                    $passrate = $_POST['passrate'];
    
                    if (!move_uploaded_file($_FILES['stu_image']['tmp_name'], $target_dir.$stu_image) || !move_uploaded_file($_FILES['com_image']['tmp_name'],$target_dir.$com_image)) {
                        header("Location:addplacements.php?savee=Error!%20reduce%20image%20and%20try%20again");
                    } else {
                        $save = mysqli_query($db, "INSERT INTO `placement`(`name`, `passrate`, `company`, `profile_img`)
                          VALUES ('$name','$passrate','images/placement/$com_image','images/placement/$stu_image')");
                        if ($save) {
                            header("Location:addplacements.php?savef=f");
                        } else {
                            header("Location:addplacements.php?savee=Error%20while%20uploading%20data%20to%20database");
                        }
                    }
                } else {
                    header("Location:addplacements.php?savee=This%20image%20format%20is%20not%20supported");
                }
            } else {
                header("Location:addplacements.php?savee=Image%20size%20must%20not%20be%20more%20than%20200kb");
            }
    }
    ?>
    <?php ob_flush(); ?>
</body>

</html>