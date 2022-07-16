<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAY QUIZ</title>
    <?php
    include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <?php
    session_start();
    require("includes/database_connect.php");

    $sql = "select MAX(numb) as m_numb from q_and_a";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
    }
    $row = mysqli_fetch_array($result);
    // echo $row["m_numb"];

    $arr = range(1, 10);
    shuffle($arr);
    $nonrepeatarray = array_slice($arr, 1, 10);
    for(i=0; )
    
    ?>
    <!-- <form role="form" method="post" action="#">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: black">Questions</label>
            <input type="text" name="question" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Answers</label>
            <input type="text" name="answer" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Option1</label>
            <input type="text" name="op1" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Option2</label>
            <input type="text" name="op2" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Option3</label>
            <input type="text" name="op3" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: black">Option4</label>
            <input type="text" name="op4" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->
</body>

</html>