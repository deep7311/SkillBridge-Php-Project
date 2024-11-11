<?php
session_start();
include_once("../dbConnection.php");

// Admin login verification
if (isset($_POST["checkLogemail"]) && isset($_POST["adminLogEmail"]) && isset($_POST["adminLogPass"])) {
    $adminLogEmail = $_POST["adminLogEmail"];
    $adminLogPass = $_POST["adminLogPass"];

    $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email = ? AND admin_pass = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $adminLogEmail, $adminLogPass);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $_SESSION["is_admin_login"] = true;
        $_SESSION["adminLogEmail"] = $adminLogEmail;
        echo json_encode(1); // Login success
    } else {
        echo json_encode(0); // Invalid credentials
    }

    $stmt->close();
    $conn->close();
}
?>
