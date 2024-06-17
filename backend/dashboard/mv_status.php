<?php 

require '../db.php';

$id = $_GET['id'];

$select = "SELECT * FROM mission_vission WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==1)
{
    $update = "UPDATE mission_vission SET status=0 WHERE id=$id";
    $update_result = mysqli_query($db_connect, $update);
    header('location:mv.php');
}
else
{
    $update_all = "UPDATE mission_vission SET status=0";
    $update_all_result = mysqli_query($db_connect, $update_all);
    
    $update = "UPDATE mission_vission SET status=1 WHERE id=$id";
    $update_result = mysqli_query($db_connect, $update);
    header('location:mv.php');
}

?>