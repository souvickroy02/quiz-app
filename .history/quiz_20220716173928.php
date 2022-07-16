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

    <link rel="stylesheet" href="quiz.css">
    <style>
        h4 {
            color: black;
        }

        p {
            color: black;
        }

        .row {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
        }
    </style>
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
    $max_r = mysqli_fetch_array($result);
    // echo $row["m_numb"];

    $arr = range(1, $max_r["m_numb"]);
    shuffle($arr);
    $nonrepeatarray = array_slice($arr, 0, 5);


    $q_arr = array();
    $a_arr = array();
    $o_arr = array();
    foreach ($nonrepeatarray as $val) {
        $q_sql = "select question from q_and_a where numb='$val'";
        $a_sql = "select answer from q_and_a where numb='$val'";
        $o_sql = "select options from q_and_a where numb='$val'";
        $q_result = mysqli_query($conn, $q_sql);
        $a_result = mysqli_query($conn, $a_sql);
        $o_result = mysqli_query($conn, $o_sql);
        $q_row = mysqli_fetch_assoc($q_result);
        $a_row = mysqli_fetch_assoc($a_result);
        $o_row = mysqli_fetch_assoc($o_result);
        array_push($q_arr, $q_row['question']);
        array_push($a_arr, $a_row['answer']);
        array_push($o_arr, $o_row['options']);
    }
    // foreach ($o_arr as $v){
    //     echo $v." ";
    // }
    $op1_arr = explode(",", $o_arr[0]);
    $op2_arr = explode(",", $o_arr[1]);
    $op3_arr = explode(",", $o_arr[2]);
    // $op4_arr = explode(",", $o_arr[3]);
    // $op5_arr = explode(",", $o_arr[4]);


    ?>
    <?php for ($x = 0; $x < 3; $x++) {
        echo '<div class="container">
            <div class="row">
                <div class="card-deck mt-5 mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"> Question ' . ($x + 1) . '</h4>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text" style="font-size: 100%">' . $q_arr[$x] . '</p>
                            <div>
                                <div class="form-group">
                                    <input type="text" name="1Input" class="form-control" id="cell1Input" />
                                </div>
                                <input type="button" class="btn btn-primary btn-block" name="1Button" value="Click Me!" id="cell1Button" />
                                <span id="1FunctionResult"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>



    <!-- <div class="container">
        <div class="row">
            <div class="card-deck mt-5 mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Longest Word</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="card-text" style="font-size: 100%">dd</p>
                        <div>
                            <div class="form-group">
                                <input type="text" name="1Input" class="form-control" id="cell1Input" />
                            </div>
                            <input type="button" class="btn btn-primary btn-block" name="1Button" value="Click Me!" id="cell1Button" />
                            <span id="1FunctionResult"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-deck mt-5 mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Longest Word</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="card-text" style="font-size: 100%">a Function to find and display the longest word in a phrase, namely the first longest word in case multiple equal size words are present </p>
                        <div>
                            <div class="form-group">
                                <input type="text" name="1Input" class="form-control" id="cell1Input" />
                            </div>
                            <input type="button" class="btn btn-primary btn-block" name="1Button" value="Click Me!" id="cell1Button" />
                            <span id="1FunctionResult"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-deck mt-5 mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Longest Word</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="card-text" style="font-size: 100%">a Function to find and display the longest word in a phrase, namely the first longest word in case multiple equal size words are present </p>
                        <div>
                            <div class="form-group">
                                <input type="text" name="1Input" class="form-control" id="cell1Input" />
                            </div>
                            <input type="button" class="btn btn-primary btn-block" name="1Button" value="Click Me!" id="cell1Button" />
                            <span id="1FunctionResult"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> -->



</body>

</html>