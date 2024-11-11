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

// Update
if (isset($_POST["requpdate"])) {
    // Check for empty fields
    if (
        empty($_POST['lesson_id']) || empty($_POST['lesson_name']) || empty($_POST['lesson_desc']) ||
        empty($_POST['course_id']) || empty($_POST['course_name'])
    ) {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        // Assigning User values to variables
        $lid = $_POST['lesson_id'];
        $lname = $_POST['lesson_name'];
        $ldesc = $_POST['lesson_desc'];
        $llink = '../lessonvid'.$_FILES['lesson_link']['name'];
        $cid = $_POST["course_id"];
        $cname = $_POST['course_name'];


        // Update query with correct column name
        $sql =  "UPDATE lesson SET lesson_name = '$lname', 
                lesson_desc = '$ldesc', course_id = '$cid',  
                course_name = '$cname', lesson_link = '$llink',  
                WHERE lesson_id = '$lid'";

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


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Lesson Details</h3>

    <?php

    if (isset($_POST["view"])) {
        $sql = "SELECT * FROM lesson WHERE lesson_id = {$_POST["id"]}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="lesson_id">Lesson ID</label>
            <input type="text" class="form-control" id="lesson_id" name="lesson_id" value="<?php if (isset($row["lesson_id"])) {
                                                                                                echo $row['lesson_id'];
                                                                                            } ?>" readonly>
        </div>

        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php if (isset($row["lesson_name"])) {
                                                                                                    echo $row['lesson_name'];
                                                                                                } ?>">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea name="lesson_desc" id="lesson_desc" class="form-control" rows="2"><?php if (isset($row["lesson_desc"])) {
                                                                                            echo $row['lesson_desc'];
                                                                                        } ?></textarea>
        </div>
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if (isset($row["course_id"])) {
                                                                                                        echo $row['course_id'];
                                                                                                    } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" 
            onkeypress="isInputNumber(event)"
            value="<?php if (isset($row["course_name"])) {echo $row['course_name'];} ?>"
            readonly>
        </div>

        <div class="form-group">
            <label for="lesson_link">Lesson Link</label>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="<?php if(isset($row['lesson_link'])){echo $row['lesson_link'];}?>" class="embed-responsive-item" allowfullscreen></iframe>
            </div>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
        </div>
        <?php
        if (isset($msg)) echo $msg;
        ?>
    </form>
</div>


<?php
include('./admininclude/footer.php');
?>