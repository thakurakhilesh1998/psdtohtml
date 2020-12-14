<?php
ob_start();
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Admissions</title>
    <link href="css/index.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <style>
        table
        {
            border: 1px solid #E57A18;
        }
        table th,td
        {
            border: 1px solid #E57A18;
            border-bottom: 1px solid #E57A18!important;
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

        <!--Start of Admission-->
        <section>
            <div class="container">
                <?php if(isset($_GET['sd'])):?>
                    <div class="alert alert-success text-center my-4" role="alert">
                        Student Data Deleted Successfully!!
                    </div>
                <?php endif;?>
                <?php if(isset($_GET['fd'])):?>
                    <div class="alert alert-danger text-center" role="alert">
                        Error While Deleting Student Data!!
                    </div>
                <?php endif?>
                <?php if(isset($_GET['fd'])):?>
                <?php endif;?>
                <?php
                require_once '../connection/db.php';
                $getAdmission = mysqli_query($db, "SELECT * FROM `new_admission`");
                if (mysqli_num_rows($getAdmission) > 0) :
                ?>
                    <table class="table table-responsive my-5 table-hover table-striped" style="margin: 0 auto;">
                        <thead>
                            <tr>
                                <th scope="col">Student Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No.</th>
                                <th scope="col">Address</th>
                                <th scope="col">Program Enrolled</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($get = mysqli_fetch_assoc($getAdmission)) : ?>
                                <tr>
                                    <td><?php echo $get['id'] ?></td>
                                    <td><?php echo $get['name'] ?></td>
                                    <td><?php echo $get['email'] ?></td>
                                    <td><?php echo $get['phone'] ?></td>
                                    <td><?php echo $get['address'] ?></td>
                                    <td><?php echo $get['program'] ?></td>
                                    <td><?php echo $get['comments'] ?></td>
                                    <td><a href="functions/editfxn.php?id=<?php echo $get['id'] ?>">Edit Details</a></td>
                                    <td><button class="btn btn-danger" id="del_details" onclick="onDelete(<?php echo $get['id']?>)">Delete</a></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <div class="alert alert-info my-5" role="alert" style="margin: 0 auto;">
                        No Admission Data Entered by Students Yet!!
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <!--End of Admission-->

        <!--Start of Footer Section-->
        <footer class="mt-auto mb-0">
            <div class="container-fluid text-center footera">
                <p>&copy;2020 Oxford College. All right reserved.</p>
            </div>
        </footer>
        <script>
            function onDelete(id)
            {
                if(confirm("Do you really want to delete this student data?"))
                {
                    window.location.href="functions/delafxn.php?id="+id;
                }
                else
                {

                }
            }
        </script>    
        <!--End of Footer Section-->
        <?php ob_flush();?>
    </body>
</html>