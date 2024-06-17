<?php 
session_start();
require '../db.php';

$title = $_POST['title'];
$sub_title = $_POST['sub_title'];

$uploaded_file = $_FILES['banner_image'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');

if(in_array($extension, $allowed_extension))
{
    if($uploaded_file['size'] <= 1000000)
    {      
        $insert = "INSERT INTO hero (hero_title, hero_sub_title) VALUES ('$title', '$sub_title')";
        $insert_result = mysqli_query($db_connect, $insert);
        $banner_id = mysqli_insert_id($db_connect);
        $file_name = $banner_id.'.'.$extension;

        $new_location = '../uploads/banner/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE hero SET hero_img='$file_name' WHERE id=$banner_id";
        $update_image_result = mysqli_query($db_connect, $update_image);
        $_SESSION['success'] = "Banner Added!";
        header('location:update_banner.php');
    }
    else
    {
        $_SESSION['size'] = "File size is too large! Max Size 1MB.";
        header('location:update_banner.php');
    }
}
else
{
    $_SESSION['invalid_extension'] = "Invalid Extension";
    header('location:update_banner.php');
}

?>