<?php
ob_start();
require_once '../connection/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:login.php");
}
?>
<?php
$view = 1;
if (isset($_GET['add'])) {
    $view = 1;
}

if (isset($_GET['view'])) {
    $view = 2;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
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
        .header-button {
            color: black;
            font-weight: 600;
            cursor: pointer;
            padding: 0 0.5rem;
        }

        .header-button span {
            line-height: 1.2;
        }

        table {
            margin: 0 auto !important;
        }

        table td,
        th {
            border-top: 1px solid #E57A18 !important;
            border: 1px solid #E57A18;
            border-bottom: 1px solid #E57A18 !important;
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
    <div class="container my-5 d-flex justify-content-center forms flex-column align-items-center">

    
        <?php if(isset($_GET['edits'])):?>
            <div class="alert alert-success">
                News Edited Successfully!!
            </div>
        <?php endif;?>

        <?php if(isset($_GET['edite'])):?>
            <div class="alert alert-danger">
                Error!!
            </div>
        <?php endif;?>

        <?php if(isset($_GET['sn'])):?>
            <div class="alert alert-success">
                News Deleted Successfully!!
            </div>
        <?php endif;?>

        <?php if(isset($_GET['fn'])):?>
            <div class="alert alert-danger">
                Error!!
            </div>
        <?php endif;?>

        <div class="row my-2 border">
        <div class="col-md-6 header-button d-flex flex-column justify-content-center" onclick="add()" style="<?php if ($view == 1) { echo "background-color:#E57A18;color:white";} ?>">
                <span>Add News</span>
            </div>
            <div class="col-md-6 header-button d-flex flex-column justify-content-center" onclick="view()" style="<?php if ($view == 2) { echo "background-color:#E57A18;color:white";} ?>">
                </span>View News</span>
            </div>
        </div>
        <script>
            function add() {
                window.location.href = "addnews.php?add=add";
            }

            function view() {
                window.location.href = "addnews.php?view=view";
            }
        </script>
        <?php if($view==1):?>
            <form class="w-50" action="#" method="GET">
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="text" class="form-control" id="date" aria-describedby="date" required name="date" readonly value=<?php echo date("Y-m-d") ?>>
                </div>
                <div class="form-group">
                    <label for="announcement">News Title:</label>
                    <input type="text" class="form-control" id="announcement" placeholder="News Title" name="title" required rows="3">
                </div>
                <div class="form-group">
                    <label for="announcement">News Content:</label>
                    <textarea type="text" class="form-control" id="announcement" placeholder="News Text" name="msg" required rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="announcement">News Type</label>
                    <select type="text" class="form-control" id="announcement" name="type" required>
                        <option value="Culture">Culture</option>
                        <option value="Education">Education</option>
                        <option value="Miscellaneous">Miscellaneous</option>
                    </select>
                </div>
                <button type="submit" class="btn" style="background-color: #1FC113!important;color: white!important;font-size: 1.2rem!important;" name="news">Submit</button>

                <?php if (isset($_GET['savee'])) : ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        Error While Adding News!!
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['savef'])) : ?>
                    <div class="alert alert-success mt-3" role="alert">
                        News Added successfully!!!
                    </div>
                <?php endif; ?>
            </form>
            <?php else: ?>
            <?php
            $getAnnou = mysqli_query($db, "SELECT * FROM `college_news`");
            if (mysqli_num_rows($getAnnou) > 0) :
            ?>
                <table class="table table-responsive table-hover table-striped my-4 w-50">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">News Title</th>
                            <th scope="col">News Msg</th>
                            <th scope="col">News Type</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($get = mysqli_fetch_assoc($getAnnou)) : ?>
                            <tr>
                                <?php $ids=$get['id']; ?>
                                <td><?php echo $get['date']; ?></td>
                                <td><?php echo $get['title']; ?></td>
                                <td><?php echo $get['msg']; ?></td>
                                <td><?php echo $get['type']?></td>
                                <td><a href="functions/editnews.php?id=<?php echo $ids; ?>">Edit</a></td>
                                <td><button class="btn btn-danger" onclick="onDelete(<?php echo $get['id']; ?>)">Delete</button></td>
                            </tr>
                        <?php endwhile; ?>
                    <tbody>
                </table>
                <?php else : ?>
                    <div class="alert alert-info text-center my-3">
                        No News Added Yet!!
                    </div>
                <?php endif; ?>
        <?php endif;?>
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
    if (isset($_GET['news'])) {
        if (!isset($_GET['title']) || !isset($_GET['msg']) || !isset($_GET['type'])) {
            header("Location:addnews.php?savee=e");
        }
        $date = $_GET['date'];
        $title = $_GET['title'];
        $msg = $_GET['msg'];
        $type = $_GET['type'];
        $save = mysqli_query($db, "INSERT INTO `college_news`(`date`,`title`,`msg`,`type`) VALUES ('$date','$title','$msg','$type')");
        if ($save) {
            header("Location:addnews.php?savef=f");
        } else {
            header("Location:addnews.php?savee=e");
        }
    }
    ?>
    <script>
        function onDelete(id) {
            if (confirm("Do you really want to delete the News?")) {
                window.location.href = "functions/delnews.php?id=" + id;
            } else {

            }
        }
    </script>
    <?php ob_flush(); ?>
</body>

</html>