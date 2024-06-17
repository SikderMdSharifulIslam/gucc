<?php 

require '../db.php';

$id = $_GET['id'];

$select = "SELECT * FROM hero WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==1)
{
    $update = "UPDATE hero SET status=0 WHERE id=$id";
    $update_result = mysqli_query($db_connect, $update);
    header('location:update_banner.php');
}
else
{
    $update_all = "UPDATE hero SET status=0";
    $update_all_result = mysqli_query($db_connect, $update_all);
    
    $update = "UPDATE hero SET status=1 WHERE id=$id";
    $update_result = mysqli_query($db_connect, $update);
    header('location:update_banner.php');
}

?>