<?php

session_start();

require 'header2.php';
require '../db.php';


$banners = "SELECT * FROM users";
$banners_result = mysqli_query($db_connect, $banners);


?>

<div class="h-screen  place-content-center bg-slate-950">
    <div class="view_banner">
        <h1 class="text-center mt-5 mb-5 text-white text-2xl">
            Users List
        </h1>
        <div class="banner_table">
            <div class="overflow-x-auto">
                <table class="table container mx-auto text-white">
                    <!-- head -->
                    <thead class="text-white">
                        <tr>
                            <th>SL</th>
                            <th>Student ID</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($banners_result as $key => $banner) { ?>
                            <tr class="">
                                <th><?= $key + 1 ?></th>
                                <td><?= $banner['student_id'] ?></td>
                                <td><?= $banner['full_name'] ?></td>
                                <td><?= $banner['email_address'] ?></td>
                                <td><?= $banner['contact_number'] ?></td>
                                <td>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-error">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require 'footer2.php'; ?>