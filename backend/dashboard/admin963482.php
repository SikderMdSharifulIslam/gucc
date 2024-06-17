<?php 

session_start();
if (!isset($_SESSION['logged_in'])) {
    header('location:../../index.php');
}


require '../db.php';
require 'header2.php';


?>


<div class="h-screen text-center place-content-center bg-slate-950">
    <div class="flex flex-wrap mx-auto text-center w-2/3">
        <a href="update_banner.php"><div class="w-44 h-40" style="background-color: #9e0142;">
            <p class="text-white pt-14">
                <i class="fa-regular fa-square-plus"></i>
                <br>
                Update Banner
            </p>
        </div></a>
        <a href="mv.php"><div class="w-44 h-40" style="background-color: #d53e4f;">
        <p class="text-white pt-14">
                <i class="fa-regular fa-square-plus"></i>
                <br>
                Update Mission & Vission
            </p>
        </div></a>
        <a href="update_programs.php"><div class="w-44 h-40" style="background-color: #f46d43;">
        <p class="text-white pt-14">
                <i class="fa-regular fa-square-plus"></i>
                <br>
                Update Programs
            </p>
        </div></a>
        <a href="update_blogs.php"><div class="w-44 h-40" style="background-color: #fdae61;">
        <p class="text-white pt-14">
                <i class="fa-regular fa-square-plus"></i>
                <br>
                Update Blogs
            </p>
        </div></a>
        <a href="member_list.php"><div class="w-44 h-40" style="background-color: #fee08b;">
        <p class=" pt-14">
        <i class="fa-solid fa-user"></i>
                <br>
                See Members List
            </p>
        </div></a>
        <a href=""><div class="w-44 h-40" style="background-color: #e6f598;">
        <p class=" pt-14">
        <i class="fa-regular fa-user"></i>
                <br>
                See Admin List
            </p>
        </div></a>
        <a href="sign_out.php"><div class="w-44 h-40" style="background-color: #abdda4;">
        <p class=" pt-14">
                <i class="fa-solid fa-right-from-bracket"></i>
                <br>
                Sign Out
            </p>
        </div></a>
        
    </div>
</div>

<?php
require 'footer2.php'
?>