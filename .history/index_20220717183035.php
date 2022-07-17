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
    <?php
    //Check if user is loging or not
    if (!isset($_SESSION["user_id"])) {
    ?>
        <div class="banner-container">
            <h1 class="heading"> Put your curiosity to test!</h1>
            <div class="btn-container">
                <button type="button" onclick="alert('Please Login First')" class="btn btn-info"><span>Take a quiz</span></button>
                <button type="button" onclick="alert('Please Login First')" class="btn btn-info"><span>Contribute</span></button>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="banner-container">
            <h1 class="heading"> Put your curiosity to test!</h1>
            <div class="btn-container">
                <button type="button" onclick="location.href='quiz.php'" class="btn btn-info"><span>Take a quiz</span></button>
                <button type="button" onclick="location.href='contribute.php'" class="btn btn-info"><span>Contribute</span></button>
            </div>
        </div>
    <?php
    }
    ?>
    

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>


</html>