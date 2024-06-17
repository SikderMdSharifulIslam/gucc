<?php

session_start();

require 'db.php';

$student_id = $_POST['student_id'];
$full_name = $_POST['full_name'];
$email_address = $_POST['email_address'];
$contact_number = $_POST['contact_number'];
$password = $_POST['password'];

// Student ID Validation
if ($student_id) {
    if (preg_match("/^\d+$/", $student_id)) //only digit allowed
    {
        $_SESSION['old_student_id'] = $student_id;
    } else {
        $flag = true;
        $_SESSION['student_id_error'] = "Invalid ID, use only numbers!";
    }
} else {
    $flag = true;
    $_SESSION['student_id_error'] = "ID is required!";
}

// Name Validation
if ($full_name) {
    if (preg_match("/^[a-zA-Z .]+$/", $full_name)) //a-z then A-Z then space then dot is allowed here
    {
        $_SESSION['old_name'] = $full_name;
    } else {
        $flag = true;
        $_SESSION['name_error'] = "Invalid Name, use only alphabets!";
    }
} else {
    $flag = true;
    $_SESSION['name_error'] = "Name is required!";
}

// Email Validation
if ($email_address) {
    if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['old_email'] = $email_address;
    } else {
        $flag = true;
        $_SESSION['email_error'] = "Email Format Invalid!";
    }
} else {
    $flag = true;
    $_SESSION['email_error'] = "Email is required!";
}

// Contact Validation
if ($contact_number) {
    if (preg_match("/^\d+$/", $contact_number)) //only digit allowed
    {
        $_SESSION['old_contact_number'] = $contact_number;
    } else {
        $flag = true;
        $_SESSION['contact_number_error'] = "Invalid Contact, use only numbers!";
    }
} else {
    $flag = true;
    $_SESSION['contact_number_error'] = "Contact Number is required!";
}

// Password Validation
if ($password) {
    if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) //Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character
    {
        $_SESSION['old_password'] = $password;
    } else {
        $flag = true;
        $_SESSION['password_error'] = "At least 8 characters long includes (uppercase,lowercase,number,special character)";
    }
} else {
    $flag = true;
    $_SESSION['password_error'] = "Password is required!";
}


// insert into db
if ($flag) {
    header('location: sign_up.php');
} 
else{
    $duplicate_id_check_query = "SELECT COUNT(*) as validID FROM users WHERE student_id = '$student_id'";
    $duplicate_id_check = mysqli_query($db_connect, $duplicate_id_check_query);
    $duplicate_email_check_query = "SELECT COUNT(*) as validity FROM users WHERE email_address = '$email_address'";
    $duplicate_email_check = mysqli_query($db_connect, $duplicate_email_check_query);
    $duplicate_contact_check_query = "SELECT COUNT(*) as validContact FROM users WHERE contact_number = '$contact_number'";
    $duplicate_contact_check = mysqli_query($db_connect, $duplicate_contact_check_query);

    if (mysqli_fetch_assoc($duplicate_id_check)['validID'] == 1) {
        $_SESSION['duplicate_id_error'] = "Duplicate student id found!";
        header('location:sign_up.php');
    }
    else if(mysqli_fetch_assoc($duplicate_email_check)['validity'] == 1) {
        $_SESSION['duplicate_email_error'] = "Duplicate email found!";
        header('location:sign_up.php');
    } 
    else if(mysqli_fetch_assoc($duplicate_contact_check)['validContact'] == 1) {
        $_SESSION['duplicate_contact_error'] = "Duplicate contact found!";
        header('location:sign_up.php');
    } else {
        $encripted_password = md5($password);
        // $insert_query = "INSERT INTO users (student_id, full_name, email_address, contact_number, password) VALUES ('$student_id','$full_name','$email_address','$contact_number','$encripted_password')";
        $insert_query = "INSERT INTO users (student_id, full_name, email_address, contact_number, password) VALUES ('$student_id','$full_name','$email_address','$contact_number','$password')";
        mysqli_query($db_connect, $insert_query);
        $_SESSION['signUp_status'] = "Seccessfully signed up!";
        header('location: sign_in.php');
    }
}


?>