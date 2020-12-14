<?php
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
    <title>Admin Dashboard</title>
    <link href="css/index.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</head>

<body>

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
                                        <a class="nav-link text-uppercase" href="functions/logoutfxn.php" style="font-size: 1rem;">Log Out<span class="sr-only">(current)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
        </section>
        <!--End of Header Section-->

        <!--Start of Admin Dashboard Section-->
        <section>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <a href="admission.php" class="card-link m-1 p-1">
                            <div class="a-card">
                                <div class="icon">
                                    <img src="images/view admission.png" alt="admission logo">
                                </div>
                                <h3>View Admissions</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <a href="announcement.php" class="card-link m-1 p-1">
                            <div class="a-card">
                                <div class="icon">
                                    <img src="images/announcement.png" alt="admission logo">
                                </div>
                                <h3>Add <br>Announcement</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <a href="addnews.php" class="card-link m-1 p-1">
                            <div class="a-card">
                                <div class="icon">
                                    <img src="images/news.png" alt="admission logo">
                                </div>
                                <h3>Add News</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <a href="events.php" class="card-link m-1 p-1">
                            <div class="a-card">
                                <div class="icon">
                                    <img src="images/events.png" alt="admission logo">
                                </div>
                                <h3>Add Events</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <a href="addplacements.php" class="card-link m-1 p-1">
                            <div class="a-card">
                                <div class="icon">
                                    <img src="images/placements.png" alt="admission logo">
                                </div>
                                <h3>Add Placements</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <a href="admissionnotices.php" class="card-link m-1 p-1">
                            <div class="a-card">
                                <div class="icon">
                                    <img src="images/bell.png" alt="admission logo">
                                </div>
                                <h3>Admission Notices</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--End of Admin Dashboard Section-->

        <!--Start of Footer Section-->
        <footer class="mt-auto mb-0">
            <div class="container-fluid text-center footera">
                <p>&copy;2020 Oxford College. All right reserved.</p>
            </div>
        </footer>
        <!--End of Footer Section-->
    </body>