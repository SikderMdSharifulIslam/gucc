<?php

session_start();

require 'header2.php';
require '../db.php';


$banners = "SELECT * FROM hero";
$banners_result = mysqli_query($db_connect, $banners);


?>

<div class="h-screen  place-content-center bg-slate-950">
    <div class="add_banner">
        <h1 class="text-center mb-5 text-white text-2xl">
            Add Banner
        </h1>
        <form action="update_banner_post.php" method="POST" enctype="multipart/form-data" class="container mx-auto w-1/2">
            <div>
                <label class="text-white" for="">Title</label> <br>
                <input name="title" type="text" placeholder="Type here" class="input input-bordered input-info w-full" />
            </div>
            <div>
                <label class="text-white" for="">Sub Title</label> <br>
                <input name="sub_title" type="text" placeholder="Type here" class="input input-bordered input-info w-full" />
            </div>
            <div>
                <label class="text-white" for="">Banner Image</label> <br>
                <input name="banner_image" type="file" class="file-input file-input-bordered file-input-info w-full" />

                <?php if (isset($_SESSION['invalid_extension'])) : ?>
                    <p class="text-red-600"><?= $_SESSION['invalid_extension']; ?></p>
                <?php endif;
                unset($_SESSION['invalid_extension']) ?>

                <?php if (isset($_SESSION['size'])) : ?>
                    <p class="text-red-600"><?= $_SESSION['size']; ?></p>
                <?php endif;
                unset($_SESSION['size']) ?>

            </div>
            <div class="mt-2">
                <button class="btn btn-info">Submit</button>
            </div>
        </form>
        <hr class="container mx-auto mt-8 border border-dashed border-gray-300" />
    </div>
    <div class="view_banner">
        <h1 class="text-center mt-5 mb-5 text-white text-2xl">
            View Banner
        </h1>
        <div class="banner_table">
            <div class="overflow-x-auto">
                <table class="table container mx-auto text-white">
                    <!-- head -->
                    <thead class="text-white">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($banners_result as $key => $banner) { ?>
                            <tr class="">
                                <th><?= $key + 1 ?></th>
                                <td><?= $banner['hero_title'] ?></td>
                                <td><?= $banner['hero_sub_title'] ?></td>
                                <td><img width="50" src="../uploads/banner/<?= $banner['hero_img'] ?>"></td>
                                <td>
                                    <a href="banner_status.php?id=<?= $banner['id'] ?>" class="btn <?= ($banner['status'] == 1 ? 'btn-success' : 'btn-warning') ?>">
                                        <?= ($banner['status'] == 1 ? 'active' : 'deactive') ?>
                                    </a>
                                </td>
                                <td><a href="" class="btn btn-error">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require 'footer2.php'; ?>