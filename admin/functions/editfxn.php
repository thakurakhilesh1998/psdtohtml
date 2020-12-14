<?php
if (!isset($_GET['id'])) {
    header("Location:../admission.php");
} else {
    $id = $_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Details</title>
    <link href="../css/index.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <style>
        @media screen and (max-width:800px) {
            .edit form {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
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
    require_once '../../connection/db.php';
    $getStudent = mysqli_query($db, "SELECT * FROM `new_admission` WHERE `id`=$id");
    if (mysqli_num_rows($getStudent) == 0) {
        header("Location:../admission.php");
        die();
    }
    while ($get = mysqli_fetch_assoc($getStudent)) :
    ?>
        <!--Start of Edit Form-->
        <div class="container my-4 d-flex justify-content-center edit">
            <form class="w-50" method="GET" action="#">
                <div class="form-group">
                    <input type="hidden" value=<?php echo $id ?> name="id">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" required name="name" value="<?php echo $get['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required name="email" value=<?php echo $get['email'] ?>>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" required name="phone" value=<?php echo $get['phone'] ?>>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea type="text" class="form-control" required name="address"><?php echo $get['address'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="Select Programme">Programme</label>
                    <select class="form-control" required id="aprogram" name="program">
                        <option value="B.Tech" <?php if ($get['program'] == 'B.Tech') {
                                                    echo "selected";
                                                } ?>>B.Tech</option>
                        <option value="B.E." <?php if ($get['program'] == 'B.E.') {
                                                    echo "selected";
                                                } ?>>B.E.</option>
                        <option value="B.SC." <?php if ($get['program'] == 'B.SC.') {
                                                    echo "selected";
                                                } ?>>B.SC.</option>
                        <option value="MCA" <?php if ($get['program'] == 'MCA') {
                                                echo "selected";
                                            } ?>>MCA</option>
                    </select>
                </div>
                <button type="submit" class="btn" style="background-color: #1FC113!important;color: white!important;font-size: 1.2rem!important;" name="edit">Edit Details</button>
                <?php if (isset($_GET['updatef'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['updatep'])) : ?>
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>
                <?php endif; ?>
            </form>
        </div>
    <?php endwhile; ?>
    <!--End of Edit Form-->
    <!--Start of Footer Section-->
    <footer class="mt-auto mb-0">
        <div class="container-fluid text-center footera">
            <p>&copy;2020 Oxford College. All right reserved.</p>
        </div>
    </footer>
    <!--End of Footer Section-->

    <?php
    if (isset($_GET['edit'])) {
        if (!isset($_GET['name']) || !isset($_GET['email']) || !isset($_GET['phone']) || !isset($_GET['address']) || !isset($_GET['program'])):?>
        <script>
            alert("all field are mandateroy");
        </script>
        <?php else: ?>
            <?php 
            $n = $_GET['name'];
            $e = $_GET['email'];
            $p = $_GET['phone'];
            $add = $_GET['address'];
            $pro = $_GET['program'];
            $update = mysqli_query($db, "UPDATE `new_admission` SET `name`='$n',`email`='$e',`phone`='$p',`address`='$add',`program`='$pro' WHERE `id`='$id';");
            if ($update):
            ?>
            <script>
                if(confirm("User Data Updated Successfully!"))
                {
                    window.location.href = "../admission.php";
                }
                else
                {
                    header("Location:editfxn.php?id=<?php echo $id?>");
                }
            </script>
                <?php else:?>
                    <script>
                alert("Error While updating user data!!");
            </script>
            <?php endif;?>
        <?php endif;?>
                <?php }?>
</body>

</html>