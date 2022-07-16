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

        label {
            color: black;
            text-align: center;
            align-items: center;
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
        $temp = explode(",", $o_arr[$x]);
        echo '<div class="container">
            <div class="row align-items-center">
                <div class="col card-deck mt-5 mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"> Question ' . ($x + 1) . '</h4>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text" style="font-size: 100%; font-weight: bold;">' . $q_arr[$x] . '</p>
                            <div>
                                <div class="form-group">
                                    <input   type="radio" name="Questions' . ($x + 1) . 'Ans" id="Questions' . ($x + 1) . 'Ans1" value=' . $temp[0] . ' id="myText">
									<label class="radioButtonBefore" for="Questions' . ($x + 1) . 'Ans1">' . $temp[0] . '</label>
                                    <br>
									<input   type="radio" name="Questions' . ($x + 1) . 'Ans" id="Questions' . ($x + 1) . 'Ans2" value=' . $temp[1] . '>
									<label class="radioButtonBefore" for="Questions' . ($x + 1) . 'Ans2">' . $temp[1] . '</label>
                                    <br>
									<input   type="radio" name="Questions' . ($x + 1) . 'Ans" id="Questions' . ($x + 1) . 'Ans3"" value=' . $temp[2] . '>
									<label class="radioButtonBefore" for="Questions' . ($x + 1) . 'Ans3">' . $temp[2] . '</label>
                                    <br>
									<input  type="radio" name="Questions' . ($x + 1) . 'Ans" id="Questions' . ($x + 1) . 'Ans4" value=' . $temp[3] . '>
									<label class="radioButtonBefore" for="Questions' . ($x + 1) . 'Ans4">' . $temp[3] . '</label>
                                    <br>    
									<input class="hidden" type="hidden" id="correct' . ($x + 1) . '_answer" value=' . $a_arr[$x] . '>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>
    <div class="container">
        <div class="row">
            <button type="button" class="btn mb-5 btn-white-reload btn-animation-1-reload submitButton btn-primary btn-lg btn-block" onclick="checkScore()">Submit</button><br>
        </div>
    </div>

    <div id="overlay">
        <div id="text" onclick="">
            <button type="button" class="btn btn-primary">Home</button>
        </div>
    </div>
    <script type="text/javascript" src="js/quiz.js"></script>
</body>

</html>