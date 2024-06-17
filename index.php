<?php

require 'backend/db.php';
$banners = "SELECT * FROM hero WHERE status=1";
$banners_result = mysqli_query($db_connect, $banners);
$after_assoc =  mysqli_fetch_assoc($banners_result);

$mv = "SELECT * FROM mission_vission WHERE status=1";
$mv_result = mysqli_query($db_connect, $mv);
$mv_after_assoc =  mysqli_fetch_assoc($mv_result);

$events = "SELECT * FROM events";
$events_result = mysqli_query($db_connect, $events);
$events_after_assoc =  mysqli_fetch_assoc($events_result);

$blogs = "SELECT * FROM blogs";
$blogs_result = mysqli_query($db_connect, $blogs);
$blogs_after_assoc =  mysqli_fetch_assoc($blogs_result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUCC</title>
    <link rel="shortcut icon" href="images/gucc.png" type="image/x-icon">

    <!-- CSS, Tailwind & Daisy UI cdn -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome cdn -->
    <script src="https://kit.fontawesome.com/bc946b8cc8.js" crossorigin="anonymous"></script>

    <style>
        .carousel-track {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .carousel-card {
            flex: 0 0 33.33%;
            /* Adjust this value to show more or fewer cards at a time */
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        sl: '1024px',
                        xs: '320px',
                    },
                    colors: {
                        clifford: '#da373d',
                        fruitPink: '#F85559',
                        fruitBlack: '#121212',
                        fruitGray: '#121212cc',
                        fruitLightGray: '#12121299',
                        customPink1: '#F85559',
                        customPink2: '#FBC0A8',
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="top">
        <header class="container mx-auto">
            <!-- Navbar Start -->
            <nav>
                <div class="navbar">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="#"><img src="images/gucc.png" alt="logo"></a>
                    </div>

                    <!-- Menu -->
                    <ul class="links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                    <ul class="links">
                        <li><a class="action_btn" href="backend/sign_in.php">Sign In</a></li>
                        <li><a class="action_btn" href="backend/sign_up.php">Sign Up</a></li>
                    </ul>
                    <div class="toggle_btn">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div class="dropdown_menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="backend/sign_in.php">Sign In</a></li>
                        <li><a href="backend/sign_up.php">Sign Up</a></li>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Hero Start -->
            <div class="hero">
                <div class="text">
                    <p>
                        <?= $after_assoc['hero_sub_title'] ?>
                    </p>
                    <h1>
                        <?= $after_assoc['hero_title'] ?>
                    </h1>
                    <button id="download_gucc_calender">
                        <span>Academic Calender</span>
                        <i class="fa-regular fa-circle-down"></i>
                    </button>
                </div>
                <div class="image max-w-2xl">
                    <img src="backend/uploads/banner/<?= $after_assoc['hero_img'] ?>" alt="gucc_committee">
                </div>
            </div>
            <!-- Hero End -->

        </header>
    </div>

    <!-- MIssion start -->
    <div class="space-y-3 mt-10">
        <h3 class="text-4xl font-extrabold text-center">Our Mission & Vission</h3>
        <p class="text-center w-2/3 mx-auto">The vision of the Green University Computer Club is to increase the leadership and develop the professional skills of the CSE students of the Green University of Bangladesh.</p>
    </div>
    <section class="container mx-auto my-16 flex justify-between items-center space-x-12">
        <div class=" space-y-5">
            <div class="rounded-md shadow-md flex space-x-4 items-center h-36 p-4 w-5/6">
                <div class="w-20 h-20 flex items-center">
                    <img src="images/value.png" alt="">
                </div>
                <div>
                    <h3 class="text-[#363958] text-[24px] font-bold"><?= $mv_after_assoc['title_1'] ?></h3>
                    <p class="text-[#3E3E3E]"><?= $mv_after_assoc['desc_1'] ?></p>
                </div>
            </div>
            <div class="rounded-md shadow-md flex space-x-4 items-center h-36 p-4 w-5/6">
                <div class="w-20 h-20 flex items-center">
                    <img src="images/vision.png" alt="">
                </div>
                <div>
                    <h3 class="text-[#363958] text-[24px] font-bold"><?= $mv_after_assoc['title_2'] ?></h3>
                    <p class="text-[#3E3E3E]"><?= $mv_after_assoc['desc_2'] ?></p>
                </div>
            </div>
            <div class="rounded-md shadow-md flex space-x-4 items-center h-36 p-4 w-5/6">
                <div class="w-20 h-20 flex items-center">
                    <img src="images/vision_1.png" alt="">
                </div>
                <div>
                    <h3 class="text-[#363958] text-[24px] font-bold"><?= $mv_after_assoc['title_3'] ?></h3>
                    <p class="text-[#3E3E3E]"><?= $mv_after_assoc['desc_3'] ?></p>
                </div>
            </div>
        </div>
        <div class="w-2/4 ">
            <img src="backend/uploads/mission_vission/<?= $mv_after_assoc['mv_img'] ?>" alt="">
        </div>
    </section>
    <!-- MIssion end -->


    <!-- Slider or Carousel Start -->
    <section>
        <div class="space-y-3 mt-10">
            <h3 class="text-4xl font-extrabold text-center">Our Programs</h3>
            <p class="text-center w-2/3 mx-auto">Empowering CSE students as they navigate the ever-changing landscape of computer science and engineering. With the department's support, GUCC is all about nurturing talent, cultivating leadership, and pushing boundaries.</p>
        </div>
        <div class="carousel-container relative overflow-hidden w-full container mx-auto mt-10">
            <div class="carousel-track  ">
                <?php foreach ($events_result as $key => $ev) { ?>
                    <div class="carousel-card p-4">
                        <div class="card w-96 bg-base-100 shadow-xl">
                            <figure><img src="backend/uploads/banner/<?= $ev['event_banner'] ?>" alt="Shoes" /></figure>
                            <div class="card-body">
                                <h2 class="card-title"><?= $ev['event_title'] ?></h2>
                                <p><?= $ev['event_description'] ?></p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- Navigation -->
            <button id="prevButton" class="carousel-prev absolute top-1/2 left-0 transform -translate-y-1/2 bg-purple-700 text-white p-4 rounded-full">❮</button>
            <button id="nextButton" class="carousel-next absolute top-1/2 right-0 transform -translate-y-1/2 bg-purple-700 text-white p-4 rounded-full">❯</button>
        </div>
    </section>
    <!-- Slider or Carousel End -->

    <!-- Super Start -->
    <div class="space-y-3 mt-10">
        <h3 class="text-4xl font-extrabold text-center">Our Moderators</h3>
        <p class="text-center w-2/3 mx-auto">The Green University Computer Club (GUCC) started its journey on October 19, 2013, with a noble mission to honor and uplift the Department of Computer Science and Engineering (CSE) at the Green University of Bangladesh.</p>
    </div>
    <section class="container mx-auto my-4 rounded-xl gap-14 bg-gradient-to-r from-cyan-500 to-blue-500 flex flex-col lg:flex-row px-16 py-20">
        <div class="flex lg:pr-28 items-center">
            <div class="space-y-5">
                <h2 class="text-5xl font-extrabold text-white">Meet Our Moderator</h2>
                <p class="text-white ">GUCC is all about nurturing talent, cultivating leadership, and pushing boundaries. We're here to build a vibrant community of future tech leaders, committed to making waves in the world of technology. </p>
                <button class="btn btn-primary">See All Executives</button>
            </div>
        </div>
        <div class="relative">
            <div>
                <div class="opacity-40 mb-16 relative z-10 p-10 rounded-lg bg-white space-y-4">
                    <img class="absolute -left-5 -top-5 w-16 border-4 border-white rounded-full bg-white" src="images/monir-sir.jpg" alt="">
                    <p>Welcome to the Green University Computer Club (GUCC)! We're a student-driven organization partnered with the Department of Computer Science and Engineering (CSE) at the prestigious Green University of Bangladesh.</p>
                    <h3 class="font-bold">Md. Monirul Islam</h3>
                    <p class="font-medium">Moderator</p>
                    <div class="flex justify-end">
                        <img src="images/circles.png" alt="">
                    </div>
                </div>
            </div>
            <div>
                <div class="absolute p-10 top-40 lg:-left-28 z-20 lg:w-[430px] rounded-lg bg-white space-y-4">
                    <img class="absolute w-20 border-4 border-white rounded-full -left-5 -top-5" src="images/monir-sir.jpg" alt="">
                    <p>Welcome to the Green University Computer Club (GUCC)! We're a student-driven organization partnered with the Department of Computer Science and Engineering (CSE) at the prestigious Green University of Bangladesh.</p>
                    <h3 class="font-bold">Md. Monirul Islam</h3>
                    <p class="font-medium">Moderator</p>
                    <div class="flex justify-end">
                        <img src="images/circles.png" alt="">
                    </div>
                </div>
            </div>
            <div>
                <div class="opacity-10 relative z-10 p-10 rounded-lg bg-white space-y-4">
                    <img class="absolute -left-5 -top-5" src="images/client.png" alt="">
                    <p>Welcome to the Green University Computer Club (GUCC)! We're a student-driven organization partnered with the Department of Computer Science and Engineering (CSE) at the prestigious Green University of Bangladesh.</p>
                    <h3 class="font-bold">Md. Monirul Islam</h3>
                    <p class="font-medium">Moderator</p>
                    <div class="flex justify-end">
                        <img src="images/circles.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Super End -->

    <!-- Blog Start -->
    <section class="container mx-auto">

        <!-- Part-1 -->
        <div class="flex justify-between flex-col lg:flex-row xs:text-center lg:text-left">
            <div class="space-y-3 mt-10">
                <h3 class="text-4xl font-extrabold text-center">GUCC Blogs</h3>
                <p class="text-center w-2/3 mx-auto">The Green University Computer Club (GUCC) started its journey on October 19, 2013, with a noble mission to honor and uplift the Department of Computer Science and Engineering (CSE) at the Green University of Bangladesh.</p>
            </div>
        </div>

        <!-- Part-2(Cards) -->
        <div class="mt-5 lg:mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($blogs_result as $key => $blog) { ?>
                <!-- Card-1 -->
                <div class="card bg-base-100 p-8 lg:p-12 border-[#1212121a] border">
                    <figure><img src="backend/uploads/blogs/<?= $blog['blog_img'] ?>" alt="Apples" /></figure>
                    <div class="card-body">
                        <h2 class="font-bold text-2xl text-fruitBlack text-center mb-6"><?= $blog['blog_title'] ?></h2>
                        <hr>
                        <p class="mt-6 mb-6 text-center text-base text-fruitLightGray font-medium"><?= $blog['author'] ?></p>
                        <!-- rating start-->
                        <div class="rating rating-lg rating-half justify-center">
                            <input type="radio" name="rating-10" class="rating-hidden" />
                            <input type="radio" name="rating-10" class="bg-customPink1 mask mask-star-2 mask-half-1" />
                            <input type="radio" name="rating-10" class="bg-customPink1 mask mask-star-2 mask-half-2" />
                            <input type="radio" name="rating-10" class="bg-customPink1 mask mask-star-2 mask-half-1" checked />
                            <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-2" />
                            <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-1" />
                            <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-2" />
                            <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-1" />
                            <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-2" />
                            <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-1" />
                            <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-2" />
                        </div>
                        <!-- rating end -->
                        <div class="card-actions justify-center mt-8 ">
                            <button class="btn btn-link capitalize font-bold text-[18px] no-underline text-customPink1 hover:no-underline hover:text-fruitBlack" onclick="my_modal_1.showModal()">Author Details</button>

                            <dialog id="my_modal_1" class="modal modal-bottom sm:modal-middle justify-center">
                                <form method="dialog" class="modal-box justify-center mt-16">
                                    <img class="mx-auto" src="images/fruit6.png" alt="">
                                    <h3 class="font-extrabold text-4xl mt-6 mb-6 text-center "><?= $blog['author'] ?></h3>
                                    <p class="py-4 mb-9 text-center"><?= $blog['author_details'] ?></p>
                                    <div class="rating rating-lg rating-half mx-auto justify-center flex">
                                        <input type="radio" name="rating-10" class="rating-hidden" />
                                        <input type="radio" name="rating-10" class="bg-customPink1 mask mask-star-2 mask-half-1" />
                                        <input type="radio" name="rating-10" class="bg-customPink1 mask mask-star-2 mask-half-2" />
                                        <input type="radio" name="rating-10" class="bg-customPink1 mask mask-star-2 mask-half-1" checked />
                                        <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-2" />
                                        <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-1" />
                                        <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-2" />
                                        <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-1" />
                                        <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-2" />
                                        <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-1" />
                                        <input type="radio" name="rating-10" class="bg-customPink2 mask mask-star-2 mask-half-2" />
                                    </div>
                                    <div class="modal-action justify-center mt-10 mb-14">
                                        <button class="btn capitalize">Close</button>
                                        <button class="btn bg-customPink1 text-white hover:text-fruitBlack capitalize">Read More</button>
                                    </div>
                                </form>
                            </dialog>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Shop All Btn -->
        <div class="container flex justify-center">
            <button class="btn  border-none bg-customPink1 capitalize font-extrabold text-[20px] text-white hover:text-fruitBlack px-8 mt-16 flex justify-center rounded-lg mb-10">
                Read All
            </button>
        </div>

    </section>
    <!-- Blog End -->

    <!-- ----------------Get in touch section start here------------- -->
    <section class="container  mx-auto mt-12 px-4 lg:mt-24">
        <hr class="mb-8 border border-dashed border-gray-300" />
        <div class="space-y-6">
            <h3 class="text-4xl font-extrabold text-center">Get In Touch</h3>
            <p class="font-semibold text-center w-2/3 mx-auto">There are a lot of different elements that go into a engineerig
                overall success. Having an understanding of what the prospective science is focusing on will help you
                understand what their expectations are and how they define success.</p>
        </div>
        <hr class="mt-8 border border-dashed border-gray-300" />
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-12">
            <div class="border border-gray-400 rounded-2xl p-12 space-y-6">
                <div class="bg-[#bced6d1a] px-8 py-10 rounded-2xl">
                    <img src="Images/Group1.png" class="object-cover mb-6" alt="">
                    <p>Phone number:</p>
                    <h6 class="text-lg font-extrabold">(+62) 123-321-543</h6>
                </div>
                <div class="bg-[#fddd5f1a] px-8 py-10 rounded-2xl">
                    <img src="Images/Group2.png" class="object-cover mb-6" alt="">
                    <p>Email:</p>
                    <h6 class="text-lg font-extrabold">dev.sikder@gmail.com</h6>
                </div>
                <div class="bg-[#629cf31a] px-8 py-10 rounded-2xl">
                    <img src="Images/Group3.png" class="object-cover mb-6" alt="">
                    <p>Location</p>
                    <h6 class="text-lg font-extrabold">Purbachal American City, Kanchon 1460</h6>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <label for="" class="text-xl font-bold">Your Name</label>
                        <input type="text" placeholder="Enter Your Full Name" class="input input-bordered w-full mt-2 bg-[#13131808]" />
                    </div>
                    <div>
                        <label for="" class="text-xl font-bold">Your Email</label>
                        <input type="text" placeholder="Enter Your Email" class="input input-bordered w-full mt-2 bg-[#13131808]" />
                    </div>
                    <div>
                        <label for="" class="text-xl font-bold">Subject</label>
                        <input type="text" placeholder="Enter Your Subject" class="input input-bordered w-full mt-2 bg-[#13131808]" />
                    </div>
                    <div>
                        <label for="" class="text-xl font-bold">Phone Number</label>
                        <input type="text" placeholder="Enter Your Phone Number" class="input input-bordered w-full mt-2 bg-[#13131808]" />
                    </div>
                </div>
                <div class="mt-6">
                    <label for="" class="text-xl font-bold">Message</label>
                    <textarea class="textarea textarea-bordered mt-2 w-full bg-[#13131808]" placeholder="What Your Message" rows="15"></textarea>
                </div>
                <div>
                    <button class="bg-primary mt-6 p-6 text-xl font-bold text-white rounded-2xl w-full">Send Message</button>
                </div>

            </div>
        </div>
        <div class="text-center mt-12 bg-[#13131808] rounded-2xl shadow-lg py-9">
            <h3 class="text-2xl font-extrabold">Social Media</h3>
            <div class="flex justify-center gap-6 mt-4 text-xl font-bold">
                <a href="#"><i class="fa-brands fa-twitter hover:text-red-700"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f hover:text-red-700"></i></a>
                <a href="#"><i class="fa-brands fa-instagram hover:text-red-700"></i></a>
                <a href="#"><i class="fa-brands fa-github hover:text-red-700"></i></a>
            </div>
        </div>
    </section>
    <!-- ----------------Get in touch section end here------------- -->
    <footer class="bg-[#131318] mt-6 lg:mt-10">
        <section class="container lg:px-32 mt-12 px-4 lg:mt-24 py-10 mx-auto">
            <section class="lg:grid grid-cols-4 px-4">
                <div class="space-y-4 text-center lg:text-left">
                    <h4 class="text-white text-3xl font-extrabold">GUCC</h4>
                    <p class="font-medium text-gray-400">There are a lot of different elements that go into a computer science
                        overall success.</p>
                    <div>
                        <i class="fa-solid fa-envelope text-red-700 mr-2"></i>
                        <span class="font-medium text-gray-400">dev.sikder@gmail.com</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-phone text-red-700 mr-2"></i>
                        <span class="font-medium text-gray-400">+880130359</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 col-span-2 text-center lg:text-left mt-10 lg:mt-0 lg:ml-24">
                    <div class="space-y-7">
                        <h6 class="text-white text-lg font-bold">Company</h6>
                        <div class="space-y-5">
                            <p class="link link-hover text-gray-400">About Us</p>
                            <p class="link link-hover text-gray-400">Leadership</p>
                            <p class="link link-hover text-gray-400">Careers</p>
                            <p class="link link-hover text-gray-400">News and Articles</p>
                            <p class="link link-hover text-gray-400">Legal Notice</p>
                        </div>
                    </div>
                    <div class="space-y-7">
                        <h6 class="text-white text-lg font-bold">Support</h6>
                        <div class="space-y-5">
                            <p class="link link-hover text-gray-400">Help Center</p>
                            <p class="link link-hover text-gray-400">FAQ</p>
                            <p class="link link-hover text-gray-400">Become Member</p>
                            <p class="link link-hover text-gray-400">Contact Us</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-7 text-center lg:text-left mt-10 lg:mt-0">
                    <h6 class="text-white text-lg font-bold">Services</h6>
                    <div class="space-y-5">
                        <p class="link link-hover text-gray-400">Academy</p>
                        <p class="link link-hover text-gray-400">Group Lesson</p>
                        <p class="link link-hover text-gray-400">Private Lesson </p>
                        <p class="link link-hover text-gray-400">Programming for Beginners</p>
                        <p class="link link-hover text-gray-400">Programming for Experts</p>
                    </div>
                </div>
            </section>
        </section>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.carousel-track');
            const slides = Array.from(track.children);
            const nextButton = document.getElementById('nextButton');
            const prevButton = document.getElementById('prevButton');
            const slidesToShow = 3; // Adjust this value based on the number of cards visible
            const slideWidth = track.clientWidth / slidesToShow;
            let currentIndex = 0;

            function updateCarousel() {
                track.style.transform = 'translateX(' + (-currentIndex * slideWidth) + 'px)';
            }

            nextButton.addEventListener('click', () => {
                if (currentIndex < slides.length - slidesToShow) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to start
                }
                updateCarousel();
            });

            prevButton.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = slides.length - slidesToShow; // Loop back to end
                }
                updateCarousel();
            });

            window.addEventListener('resize', () => {
                track.style.transition = 'none'; // Disable transition during resize
                updateCarousel();
                setTimeout(() => {
                    track.style.transition = ''; // Re-enable transition after resize
                });
            });

            updateCarousel();
        });
    </script>
    <script src="script.js"></script>

</body>

</html>