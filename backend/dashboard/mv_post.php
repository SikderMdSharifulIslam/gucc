<?php 
session_start();
require '../db.php';

$title_1 = $_POST['title_1'];
$desc_1 = $_POST['description_1'];
$title_2 = $_POST['title_2'];
$desc_2 = $_POST['description_2'];
$title_3 = $_POST['title_3'];
$desc_3 = $_POST['description_3'];

$uploaded_file = $_FILES['mv_image'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');

if(in_array($extension, $allowed_extension))
{
    if($uploaded_file['size'] <= 1000000)
    {      
        $insert = "INSERT INTO mission_vission (title_1,desc_1, title_2, desc_2, title_3, desc_3) VALUES ('$title_1', '$desc_1','$title_2', '$desc_2','$title_3', '$desc_3')";
        $insert_result = mysqli_query($db_connect, $insert);
        $banner_id = mysqli_insert_id($db_connect);
        $file_name = $banner_id.'.'.$extension;

        $new_location = '../uploads/mission_vission/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE mission_vission SET mv_img='$file_name' WHERE id=$banner_id";
        $update_image_result = mysqli_query($db_connect, $update_image);
        $_SESSION['success'] = "Image Added!";
        header('location:mv.php');
    }
    else
    {
        $_SESSION['size'] = "File size is too large! Max Size 1MB.";
        header('location:mv.php');
    }
}
else
{
    $_SESSION['invalid_extension'] = "Invalid Extension";
    header('location:mv.php');
}

?>