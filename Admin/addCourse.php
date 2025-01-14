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

if (isset($_POST['courseSubmitBtn'])) {
    // Check if all fields are filled
    if (empty($_POST['course_name']) || empty($_POST['course_desc']) || empty($_POST['course_author']) ||
        empty($_POST['course_duration']) || empty($_POST['course_price']) || empty($_POST['course_original_price'])) {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        // Capture all filled data
        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_author = $_POST['course_author'];
        $course_duration = $_POST['course_duration'];
        $course_price = $_POST['course_price'];
        $course_original_price = $_POST['course_original_price'];
        
        // Handle the image upload
        if (isset($_FILES['course_file']) && $_FILES['course_file']['error'] === 0) {
            $course_image = $_FILES['course_file']['name'];
            $course_image_temp = $_FILES['course_file']['tmp_name'];
            $img_folder = '../image/courseimg/' . $course_image;
            move_uploaded_file($course_image_temp, $img_folder);
        } else {
            $img_folder = ''; // Set default if no image is uploaded
        }

        // Insert into database
        $sql = "INSERT INTO course (course_name, course_desc, course_author, course_duration, course_price, course_original_price, course_img) 
                VALUES ('$course_name', '$course_desc', '$course_author', '$course_duration', '$course_price', '$course_original_price', '$img_folder')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Added Successfully</div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Course</div>';
        }
    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Course</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea name="course_desc" id="course_desc" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price">
        </div>
        <div class="form-group">
            <label for="course_file">Course Image</label>
            <input type="file" class="form-control-file" id="course_file" name="course_file">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
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
