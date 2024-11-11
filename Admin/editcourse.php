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
        empty($_POST['course_name']) || empty($_POST['course_desc']) || empty($_POST['course_author']) ||
        empty($_POST['course_duration']) || empty($_POST['course_price']) || empty($_POST['course_original_price'])
    ) {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        // Assigning User values to variables
        $cid = $_POST["course_id"];
        $cname = $_POST['course_name'];
        $cdesc = $_POST['course_desc'];
        $cauthor = $_POST['course_author'];
        $cduration = $_POST['course_duration'];
        $cprice = $_POST['course_price'];
        $coriginalprice = $_POST['course_original_price'];

        // Fetch current image if no new image is uploaded
        $sql = "SELECT course_img FROM course WHERE course_id = '$cid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $course_image = $row['course_img'];

        // Handle the image upload if a new file is provided
        if (isset($_FILES['course_file']) && $_FILES['course_file']['error'] === 0) {
            $course_image = $_FILES['course_file']['name'];
            $course_image_temp = $_FILES['course_file']['tmp_name'];
            $img_folder = '../image/courseimg/' . $course_image;
            move_uploaded_file($course_image_temp, $img_folder);
            $course_image = $img_folder; // Set new image path
        }

        // Update query with correct column name
        $sql =  "UPDATE course SET course_name = '$cname', 
                course_desc = '$cdesc', course_author = '$cauthor',  
                course_duration = '$cduration', course_price = '$cprice',  
                course_original_price = '$coriginalprice', 
                course_img = '$course_image' WHERE course_id = '$cid'";

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
    <h3 class="text-center">Update Course Details</h3>

    <?php

    if (isset($_POST["view"])) {
        $sql = "SELECT * FROM course WHERE course_id = {$_POST["id"]}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if (isset($row["course_id"])) {
                                                                                                echo $row['course_id'];
                                                                                            } ?>" readonly>
        </div>

        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if (isset($row["course_name"])) {
                                                                                                    echo $row['course_name'];
                                                                                                } ?>">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea name="course_desc" id="course_desc" class="form-control" rows="2"><?php if (isset($row["course_desc"])) {
                                                                                            echo $row['course_desc'];
                                                                                        } ?></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author" value="<?php if (isset($row["course_author"])) {
                                                                                                        echo $row['course_author'];
                                                                                                    } ?>">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php if (isset($row["course_duration"])) {
                                                                                                            echo $row['course_duration'];
                                                                                                        } ?>">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php if (isset($row["course_original_price"])) {
                                                                                                                        echo $row['course_original_price'];
                                                                                                                    } ?>">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php if (isset($row["course_price"])) {
                                                                                                        echo $row['course_price'];
                                                                                                    } ?>">
        </div>
        <div class="form-group">
            <label for="course_file">Course Image</label>
            <img src="<?php if (isset($row["course_name"])) {
                            echo $row['course_img'];
                        } ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="course_file" name="course_file">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
        </div>
        <?php
        if (isset($msg)) echo $msg;
        ?>
    </form>
</div>


<?php
include('./admininclude/footer.php');
?>