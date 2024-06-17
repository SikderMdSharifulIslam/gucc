<?php 
session_start();
require '../db.php';

$title = $_POST['title'];
$author = $_POST['author'];
$author_details = $_POST['author_details'];

$uploaded_file = $_FILES['banner_image'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');

if(in_array($extension, $allowed_extension))
{
    if($uploaded_file['size'] <= 1000000)
    {      
        $insert = "INSERT INTO blogs (blog_title, author, author_details) VALUES ('$title', '$author', '$author_details')";
        $insert_result = mysqli_query($db_connect, $insert);
        $banner_id = mysqli_insert_id($db_connect);
        $file_name = $banner_id.'.'.$extension;

        $new_location = '../uploads/blogs/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE blogs SET blog_img='$file_name' WHERE id=$banner_id";
        $update_image_result = mysqli_query($db_connect, $update_image);
        $_SESSION['success'] = "Blog Added!";
        header('location:update_blogs.php');
    }
    else
    {
        $_SESSION['size'] = "File size is too large! Max Size 1MB.";
        header('location:update_blogs.php');
    }
}
else
{
    $_SESSION['invalid_extension'] = "Invalid Extension";
    header('location:update_blogs.php');
}

?>