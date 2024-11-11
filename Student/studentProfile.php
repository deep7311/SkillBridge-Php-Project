<?php
if(!isset($_SESSION)){
    session_start();
}

include('./stuInclude/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_login'])) {
    $stuEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script> location.href='../index.php';</script>";
}

$sql = "SELECT * FROM student WHERE email = '$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
}
?>