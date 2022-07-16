<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <?php
    include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <!-- Navbar -->
    <?php
    include "includes/header.php";
    ?>

    <!-- Banner -->
    <div class="banner-container">
        <h1 class="heading"><span>Lorem Ipsum</span> <br> quizzing is fun </h1>
        <div class="btn-container">
            <button type="button" class="btn btn-info"><span>Take a quiz</span></button>
            <button type="button" class="btn btn-info"><span>Contribute</span></button>
        </div>
    </div>

    <!-- Card -->
    <div class="body-container">
        <div class="container pt-5 mb-5">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="card mb-5 rounded">
                        <img src="img/sports.png" class="card-img-top" alt="...">
                        <!-- <div class="card-body bg-primary">
                            <a href="#" style="text-decoration: none;">
                                <h5 class="card-title text-center">Sports</h5>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-5 rounded">
                        <img src="img/entertainment.png" class="card-img-top" alt="...">
                        <!-- <div class="card-body bg-primary">
                            <a href="#" style="text-decoration: none;">
                                <h5 class="card-title text-center">Entertainment</h5>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-5 rounded">
                        <img src="img/tech.png" class="card-img-top" alt="...">
                        <!-- <div class="card-body bg-primary">
                            <a href="#" style="text-decoration: none;">
                                <h5 class="card-title text-center">Science and Tech</h5>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php
        include "includes/footer.php";
        ?>

    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>


</html>