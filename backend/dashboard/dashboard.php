<?php require '../db.php' ?>
<?php
require 'header2.php';

$select_query = "SELECT * FROM events";
$data_from_db = mysqli_query($db_connect, $select_query);



?>

<div>
    <!-- Sidebar Star -->
    <div class=" md:w-2/12 ">
        <!-- <button id="toggleSidebar" data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button> -->
        <aside id="default-sidebar" class="fixed top-0 left-0 z-[-40]  md:h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidenav">
            <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fa-solid fa-user"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fa-solid fa-address-book"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Membership Form</span>
                        </a>
                    </li>

                </ul>
                <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                            <i class="fa-solid fa-gear"></i>
                            <span class="ml-3">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span class="ml-3">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>

            <a href="#" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                </svg>
            </a>
            <a href="#" data-tooltip-target="tooltip-settings" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <div id="tooltip-settings" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                Settings page
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>


        </aside>
    </div>
    <!-- Sidebar End -->
    <div class=" md:w-5/6 float-end">
        <!-- Navbar Start-->
        <div class=" mt-5 left-0 right-0 z-40 mx-auto drop-shadow-xl">
            <div class="navbar bg-base-100 rounded-2xl">
                <div class="flex-1">
                    <a href="#" class="btn btn-ghost text-xl">Dashboard</a>
                </div>
                <div class="flex-none">
                <div class="hidden md:block text-end md:mr-3 ">
                <p>Sikder Md. Shariful Islam</p>
                <p>213002146</p>
                </div>
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn-ghost btn-circle avatar">
                            <div class="rounded-full">
                                <img alt="Tailwind CSS Navbar component" src="../../images/sikder.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar End-->



        <!-- <div class=" md:w-3/4 float-end"> -->
        <!-- Upcoming Events Start -->
        <div class="container mx-auto grid md:grid-cols-3 mt-4 gap-4 sm:px-3">
            <?php
            foreach ($data_from_db as $event_details) :

                // print_r($user_value);
                // }
            ?>
                <div class="card mx-2 bg-base-100 shadow-xl">
                    <figure class="px-4 pt-4">
                        <img src="../../images/<?= $event_details['event_banner'] ?>" alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title"><?= $event_details['event_title'] ?></h2>
                        <p><?= $event_details['event_description'] ?></p>
                        <div class="card-actions">
                            <button class="btn btn-primary">Become Volunteer</button>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <!-- Upcoming Events End -->
        <!-- </div> -->
    </div>

</div>
<?php
require 'footer2.php'
?>