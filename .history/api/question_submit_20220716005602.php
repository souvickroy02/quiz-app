<?php
session_start();
require("../includes/database_connect.php");

$ques = $_POST['question'];
$ans = $_POST['answer'];
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op3 = $_POST['op3'];
$op4 = $_POST['op4'];

$op = $op1 . ',' . $op2 . ',' . $op3 . ',' . $op4;

$ques = $ques . '?';


$sql = "INSERT INTO q_and_a (question, answer, options) VALUES ('$ques', '$ans','$op')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

mysqli_close($conn);
