<?php

session_start();

require 'header2.php';
require '../db.php';


$banners = "SELECT * FROM mission_vission";
$banners_result = mysqli_query($db_connect, $banners);


?>
<div class="bg-slate-950">


<div class="h-screen  place-content-center bg-slate-950">
    <div class="add_banner">
        <h1 class="text-center mb-5 text-white text-2xl">
            Add Mission & Vission
        </h1>
        <form action="mv_post.php" method="POST" enctype="multipart/form-data" class="container mx-auto w-1/2">
            <div>
                <label class="text-white" for="">Title_1</label> <br>
                <input name="title_1" type="text" placeholder="Type here" class="input input-bordered input-info w-full" />
            </div>
            <div>
                <label class="text-white" for="">Description_1</label> <br>
                <input name="description_1" type="text" placeholder="Type here" class="input input-bordered input-info w-full" />
            </div>
            <div>
                <label class="text-white" for="">Title_2</label> <br>
                <input name="title_2" type="text" placeholder="Type here" class="input input-bordered input-info w-full" />
            </div>
            <div>
                <label class="text-white" for="">Description_2</label> <br>
                <input name="description_2" type="text" placeholder="Type here" class="input input-bordered input-info w-full" />
            </div>
            <div>
                <label class="text-white" for="">Title_3</label> <br>
                <input name="title_3" type="text" placeholder="Type here" class="input input-bordered input-info w-full" />
            </div>
            <div>
                <label class="text-white" for="">Description_3</label> <br>
                <input name="description_3" type="text" placeholder="Type here" class="input input-bordered input-info w-full" />
            </div>
            <div>
                <label class="text-white" for="">Mission & Vission Image</label> <br>
                <input name="mv_image" type="file" class="file-input file-input-bordered file-input-info w-full" />

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
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
        <hr class="container mx-auto mt-8 border border-dashed border-gray-300 " />
    </div>
    <div class="view_banner bg-slate-950">
        <h1 class="text-center pt-5 mb-5 text-white text-2xl">
            View Mission & Vission
        </h1>
        <div class="banner_table">
            <div class="overflow-x-auto">
                <table class="table container mx-auto text-white">
                    <!-- head -->
                    <thead class="text-white">
                        <tr>
                            <th>SL</th>
                            <th>Title_1</th>
                            <th>Description_1</th>
                            <th>Title_2</th>
                            <th>Description_2</th>
                            <th>Title_3</th>
                            <th>Description_3</th>
                            <th>Mission & Vission Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($banners_result as $key => $banner) { ?>
                            <tr class="">
                                <th><?= $key + 1 ?></th>
                                <td><?= $banner['title_1'] ?></td>
                                <td><?= $banner['desc_1'] ?></td>
                                <td><?= $banner['title_2'] ?></td>
                                <td><?= $banner['desc_2'] ?></td>
                                <td><?= $banner['title_3'] ?></td>
                                <td><?= $banner['desc_3'] ?></td>
                                <td><img width="50" src="../uploads/mission_vission/<?= $banner['mv_img'] ?>"></td>
                                <td>
                                    <a href="mv_status.php?id=<?= $banner['id'] ?>" class="btn <?= ($banner['status'] == 1 ? 'btn-success' : 'btn-warning') ?>">
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
</div>
<?php require 'footer2.php'; ?>