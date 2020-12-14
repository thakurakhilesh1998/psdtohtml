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
    <title>Add Events</title>
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
                <label for="event date">Event Date:</label>
                <input type="date" class="form-control" id="date" aria-describedby="date" required name="date">
            </div>
            <div class="form-group">
                <label for="event name">Event Name:</label>
                <input type="text" class="form-control" id="announcement" placeholder="News Title" name="title" required rows="3">
            </div>
            <div class="form-group">
                <label for="type">Event Type</label>
                <select type="text" class="form-control" id="announcement" placeholder="News Title" name="type" required>
                    <option value="Culture">Culture</option>
                    <option value="Education">Education</option>
                    <option value="Ceremonial">Ceremonial</option>
                    <option value="Campus">Campus</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Select Event Image</label>
                <input type="file" class="form-control" name="image" required accept="image/x-png,image/gif,image/jpeg">
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
        $maxsize = 204800;
        if($_POST['date']>=date("Y-m-d"))
        {
        $imagename = $_FILES['image']['name'];
        if ($_FILES['image']['size'] < 204800) {
        
        $target_dir = '../images/';
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Valid file extensions
        $extensions_arr = array("jpg", "jpeg", "png", "gif");
        if (in_array($imageFileType, $extensions_arr)) {
            $date = $_POST['date'];
            $title = $_POST['title'];
            $type = $_POST['type'];

            if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imagename)) {
                header("Location:events.php?savee=Error!%20reduce%20image%20and%20try%20again");
            } else {
                $save = mysqli_query($db, "INSERT INTO `events`(`name`, `date`, `image`, `type`)
                    VALUES ('$title','$date','images/$imagename','$type')");
                if ($save) {
                    header("Location:events.php?savef=f");
                } else {
                    header("Location:events.php?savee=Error%20while%20uploading%20data%20to%20database");
                }
            }
        } 
        else {
            header("Location:events.php?savee=This%20image%20format%20is%20not%20supported");
        }
    }
    else
    {
        header("Location:events.php?savee=Image%20size%20must%20not%20be%20more%20than%20200kb");
    }
}
else
{
    header("Location:events.php?savee=Event%20Date%20must%20be%20more%20than%20current%20date");
}
    }
    ?>
    <?php ob_flush(); ?>
</body>

</html>