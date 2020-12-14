<?php 
    require_once 'connection/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link href="css/admission.css?v=<?php echo time()?>" rel="stylesheet" type="text/css">
    <link href="css/index.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script>
        function doReload(value) {
            document.location = 'index.php?news_type=' + value;
        }
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
                        <li class="navbar-nav"> <a class="nav-link" href="about.php">About</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="courses offered.php">Course Offered</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="placements.php">Placements</a></li>
                        <li class="navbar-nav"> <a class="nav-link" href="#">Admissions</a></li>
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
        <img src="images/banner.jpg" alt="banner" class="img-fluid banner-img">
        <div class="banner-text">
            <span class="text-center" id="first">THE BEST</span><br>
            <span class="text-center" id="second">ADMISSION</h2><br>

        </div>
    </div>
    <!--End of banner-->

    <!--Start of Admission Section-->
    <section>
        <div class="container">
        <h4 class="text-center mt-5" style="text-transform: uppercase;">Student Placements</h4>
        <div class="main">
            <div class="row admissions my-4">
                <div class="col-md-4 p-3 px-2 mx-0"><span>Admission 2020</span></div>
                <div class="col-md-4 n-active p-3 px-2 mx-0"><span>College/Others Admissions</span></div>
                <div class="col-md-4 n-active p-3 px-2 mx-0"><span>Online Admissions</span></div>
            </div>
            <div class="admission-notice px-4">
                <?php 
                    $anotices=mysqli_query($db,"SELECT * FROM `admission_notices` ORDER BY `date` DESC");
                    if(mysqli_num_rows($anotices)>0):
                ?>
                <?php while($getData=mysqli_fetch_assoc($anotices)):?>
                <div class="notices">
                    <span class="date"><?php echo $getData['date']?>:</span>
                    <span class="msg"><?php echo $getData['msg']?></span>
                    <hr>
                </div>
                <?php endwhile;?>
                <?php else:?>
                    <div class="text-center" style="font-size: 1.3rem;">
                        No Notices added by college!!!
                    </div>
                <?php endif;?>
            </div>
            <div class="getAdmitted ml-4">
                <a href="#">Get Admitted<i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-left:1rem;"></i></a>
            </div>
        </div>   
        </div>
    </section>
    <!--End of Admission Section-->

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
                        <form method="GET" action="sfxns/afxn.php" class="f-input">
                            <input type="text" placeholder="Enter Email Address" required name="s-email">
                            <input type="submit" value="GO" name="subscribe">
                        </form>
                    </div>
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
    <script src="js/index.js" type="text/js"></script>
</body>

</html>