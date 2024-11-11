<?php
if(!isset($_SESSION)) {
    session_start();
}

include('./admininclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION["is_admin_login"])) {
    $adminEmail = $_SESSION["adminLogEmail"];
} else {
    header('location:../index.php');
}


$msg = ""; // Initialize the message variable

if (isset($_POST['newStuSubmitBtn'])) {
    // Check if all fields are filled
    if (empty($_POST['stu_name']) || empty($_POST['stu_email']) || empty($_POST['stu_pass']) ||
        empty($_POST['stu_occ'])) {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        // Capture all filled data
        $stu_name = $_POST["stu_name"];
        $stu_email = $_POST["stu_email"];
        $stu_pass = $_POST["stu_pass"];
        $stu_occ = $_POST["stu_occ"];


        // Insert into database
        $sql = "INSERT INTO student (stu_name, stu_email, stu_pass, stu_occ) 
                VALUES ('$stu_name', '$stu_email', '$stu_pass', '$stu_occ')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Successfully</div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Student</div>';
        }
    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email">
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass">
        </div>
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;}?>
    </form>
</div>

<?php
include('./admininclude/footer.php');
?>
