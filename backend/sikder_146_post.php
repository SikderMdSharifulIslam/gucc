<?php
session_start();

require 'db.php';

$code = $_POST['code'];
$password = $_POST['password'];

if (!$code) {
    $_SESSION['code_error'] = "Code is required!";
    header('location:sikder_146.php');
}
if (!$password) {
    $_SESSION['pass_error'] = "Password is required!";
    header('location:sikder_146.php');
} else {
    $select_count_query = "SELECT COUNT(*) AS result FROM sikder_146 WHERE chip_code = '$code' AND pass_code='$password'";

    $from_db = mysqli_query($db_connect, $select_count_query);
    $from_db_after_assoc = mysqli_fetch_assoc($from_db);

    if ($from_db_after_assoc['result'] == 1) {
        $_SESSION['logged_in'] = "logged_in!";
        header('location:dashboard/admin963482.php ');
    } else {
        $_SESSION['signIn_error'] = "Wrong Credential!";
        header('location:sikder_146.php');
    }
}
?>