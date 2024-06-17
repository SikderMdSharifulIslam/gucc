<?php
session_start();

require 'db.php';

$student_id = $_POST['student_id'];
// $password = md5($_POST['password']);
$password = $_POST['password'];

$select_count_query = "SELECT COUNT(*) AS result FROM users WHERE student_id = '$student_id' AND password='$password'";

$from_db = mysqli_query($db_connect, $select_count_query);
$from_db_after_assoc = mysqli_fetch_assoc($from_db);

if($from_db_after_assoc['result']==1){
    header('location:dashboard/dashboard.php ');
}
else
{
    $_SESSION['signIn_error'] = "Wrong Credential!";
    header('location:sign_in.php');
}

?>
