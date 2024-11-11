<?php
include('../dbConnection.php');
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['is_login'])) {
    $stuLogEmail = $_SESSION['stuLogEmail'];
}

$sql = "SELECT * FROM student WHERE email = '$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $stu_img = $row["stu_img"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>