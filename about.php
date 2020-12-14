<?php 
    require_once 'connection/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="css/index.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css">
    <link href="css/about.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Start of sub heading-->
    <section>
        <div class="container py-3 sub-heading">
            <span class="contact-us"><img src="images/telephone.svg"><span class="line">--</span>4598098778</span>
            <span class="contact-us"><img src="images/email.svg"><span class="line">--</span>email@email.com</span>
            <a href="#" id="pay-btn">Pay Your Fees<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            <div id="contact-icons">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
            </div>
        </div>
    </section>
    <!-- End of sub heading-->

    <!-- Start of Main Header-->
    <header>
        <div class="container-fluid nav-bar py-1  navbar-dark">
            <nav class="navbar navbar-expand-lg top-navbar container">
                <a class="navbar-brand" href="index.php" style="width: 60px;height:60px;padding:0;margin:0"><img src="images/logo.png" style="width: 60px;height:60px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse h-nav" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-container">
                        <li class="navbar-nav"> <a class="nav-link" href="index.php">Home</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="#">About</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="courses offered.php">Course Offered</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="placements.php">Placements</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="admission.php">Admissions</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="index.php">Achivements</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="index.php">Club</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="index.php">Events</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End of Mian Header-->

    <!--Start of banner-->
    <div class="container-fluid banner">
        <img src="images/placementsbanner.jpg" alt="banner" class="img-fluid banner-img">
        <div class="banner-text">
            <span class="text-center" id="first">ABOUT</span><br>
            <span class="text-center" id="second">OXFORD<br>COLLEGE</h2><br>
        </div>
    </div>
    <!--End of banner-->
    <!--Start of About Section-->
    <div class="container my-3">
        <div class="row my-5">
            <div class="col-md-6 d-flex justify-content-around w-100 px-2">
                <div style="width: 60%;">
                    <img src="images/sample2.jfif" class="img-fluid" style="height: 100%;">
                </div>
                <div class="d-flex flex-column justify-content-around pl-3" style="width: 40%;">
                    <img src="images/sample1.jfif" class="img-fluid pb-2" style="height: 50%;">
                    <img src="images/sample3.jfif" class="img-fluid pt-2" style="height: 50%;">
                </div>
            </div>
            <div class="col-md-6 about-text p-4">
                <span>About The College</span>
                <h2>OXFORD</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                    from a Lorem Ipsum
                    passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                    from a Lorem Ipsum
                    passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source.
                </p>
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                    from a Lorem Ipsum
                    passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000
                </p>
            </div>
        </div>
        <hr>
    </div>

    <!--End of About Section-->

    <!--Start of Data Rich SECton-->
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-4 pt-2">
                <div class="rounded-img">
                    <img src="images/university.png">
                </div>
                <div class="i-content">
                    <h3>Best College</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour,
                    </p>
                    <p>
                        or randomised words which don't look even slightly believable. If you are going to use a passage
                        of
                        Lorem Ipsum, you need to be sure
                    </p>
                </div>
            </div>
            <div class="col-md-4 pt-2">
                <div class="rounded-img">
                    <img src="images/good (1).png">
                </div>
                <div class="i-content">
                    <h3>Good Culture</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour,
                    </p>
                    <p>
                        or randomised words which don't look even slightly believable. If you are going to use a passage
                        of
                        Lorem Ipsum, you need to be sure
                    </p>
                </div>
            </div>
            <div class="col-md-4 pt-2">
                <div class="rounded-img">
                    <img src="images/database.png">
                </div>
                <div class="i-content">
                    <h3>Data Rich</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour,
                    </p>
                    <p>
                        or randomised words which don't look even slightly believable. If you are going to use a passage
                        of
                        Lorem Ipsum, you need to be sure
                    </p>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <!--End of Data Rich SECton-->

    <!--Start of About Section-->
    <div class="container my-3">
        <div class="row my-5">

            <div class="col-md-6 about-text p-4">
                <span>Lorem Epsum</span>
                <h2>Nullam Viate</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                    from a Lorem Ipsum
                    passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                    from a Lorem Ipsum
                    passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source.
                </p>
                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                    from a Lorem Ipsum
                    passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-around w-100 px-2">
                <div style="width: 60%;">
                    <img src="images/sample2.jfif" class="img-fluid" style="height: 100%;">
                </div>
                <div class="d-flex flex-column justify-content-around pl-3" style="width: 40%;">
                    <img src="images/sample1.jfif" class="img-fluid pb-2" style="height: 50%;">
                    <img src="images/sample3.jfif" class="img-fluid pt-2" style="height: 50%;">
                </div>
            </div>
        </div>
        <hr>
    </div>

    <!--End of About Section-->
    <!--Start of Partners Section-->
    <div class="container">
        <h4 class="text-center mt-5 font-weight-bold" style="text-transform: uppercase;">Our Partners</h4>
        <div class="partners mt-4">
            <img src="images/tata.png" alt="image" class="img-fluid">
            <img src="images/cognizant.png" class="img-fluid">
            <img src="images/a.png" class="img-fluid">
            <img src="images/polygon.png" class="img-fluid">
            <img src="images/delottie.png" class="img-fluid">
        </div>
    </div>
    <!--End of Partners Section-->

    <!--Start of footer section-->
    <footer>
        <div class="footer pt-5 pb-3">
            <div class="container d-flex footer-c">
                <div class="f-logo mt-4">
                    <img src="images/logo.png" style="width: 150px; height: 150px;">
                </div>
                <div class="f-links">
                    <span>Our Links</span>
                    <div class="f-first d-flex justify-content-between f-links-lists">
                        <ul class="f-first mt-4 mt-md-1">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="courses offered.php">Courses</a></li>
                            <li><a href="placements.php">Placements</a></li>
                        </ul>
                        <ul class="f-second mt-4 ml-5 mt-md-1 ml-md-5 ml-sm-1">
                            <li><a href="admission.php">Admissions</a></li>
                            <li><a href="index.php">Achivements</a></li>
                            <li><a href="index.php">Club</a></li>
                            <li><a href="index.php">Events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="f-subscribe">
                    <span>Subscribe To NewsLetter</span>
                    <div class="mt-4">
                        <form method="GET" action="sfxns/aboutfxn.php" class="f-input">
                            <input type="text" placeholder="Enter Email Address" required name="s-email">
                            <input type="submit" value="GO" name="subscribe">
                        </form>
                    </div>

                    <?php
                    if (isset($_GET['subscribe'])) {
                        $s_email = $_GET['s-email'];
                        $savesub = mysqli_query($db, "INSERT INTO `subscribe`(`email`) VALUES ('$s_email')");
                        if ($savesub) {
                            header("Location:#?sub=s");
                        } else {
                            header("Location:#?subf=f");
                        }
                    }
                    ?>
                    <?php if (isset($_GET['sub'])) : ?>
                        <div class="alert alert-success mt-4" role="alert">
                            Email Added to Newsletter Successfully!!
                        </div>

                    <?php endif; ?>
                    <?php if (isset($_GET['subf'])) : ?>
                        <div class="alert alert-warning mt-4" role="alert">
                            Email is Already Registered!!
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="container">
                <hr style="background-color: gray;">
            </div>
            <div class="text-center text-white py-3">&copy;Oxford Institution. All right reserved</div>
        </div>
    </footer>
    <!--End of Footer Section-->
</body>

</html>