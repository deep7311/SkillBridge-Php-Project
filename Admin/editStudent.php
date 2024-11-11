<?php
if (!isset($_SESSION)) {
    session_start();
}

include('./admininclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION["is_admin_login"])) {
    $adminEmail = $_SESSION["adminLogEmail"];
} else {
    header('location:../index.php');
}

// Update
if (isset($_POST["requpdate"])) {
    // Check for empty fields
    if (
        empty($_POST['stu_name']) || empty($_POST['stu_email']) || empty($_POST['stu_pass']) ||
        empty($_POST['stu_occ'])) {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        // Assigning User values to variables
        $sid = $_POST["stu_id"];
        $sname = $_POST["stu_name"];
        $semail = $_POST["stu_email"];
        $spass = $_POST["stu_pass"];
        $socc = $_POST["stu_occ"];


        // Update query with correct column name
        $sql =  "UPDATE student SET stu_name = '$sname', 
        stu_email = '$semail', stu_pass = '$spass',  
        stu_occ = '$socc' WHERE stu_id = '$sid'";


        if ($conn->query($sql) === TRUE) {
            // Message for successful update
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        } else {
            // Message for update failure
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
        }
    }
}

?>


<?php

if (isset($_POST["view"])) {
    $sql = "SELECT * FROM student WHERE stu_id = {$_POST["id"]}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Student Details</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_id">Studnet ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if(isset($row['stu_id'])) {echo $row['stu_id'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php if(isset($row['stu_name'])) {echo $row['stu_name'];}?>">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email" value="<?php if(isset($row['stu_email'])) {echo $row['stu_email'];}?>">
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass" value="<?php if(isset($row['stu_pass'])) {echo $row['stu_pass'];}?>">
        </div>
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ" value="<?php if(isset($row['stu_occ'])) {echo $row['stu_occ'];}?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
    </form>
</div>


<?php
include('./admininclude/footer.php');
?>