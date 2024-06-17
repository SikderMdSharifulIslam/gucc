const toggleBtn = document.querySelector('.toggle_btn')
const toggleBtnIcon = document.querySelector('.toggle_btn i')
const dropDownMenu = document.querySelector('.dropdown_menu')

toggleBtn.onclick = function(){
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    toggleBtnIcon.classList = isOpen?'fa-solid fa-xmark':'fa-solid fa-bars'
}


document.getElementById('download_gucc_calender').addEventListener('click', function() {
    const link = document.createElement('a');
    link.href = 'files/Academic_Calendar_2024.pdf'; // Replace with the actual path to your PDF file
    link.download = 'Academic_Calendar_2024.pdf'; // This will be the name of the downloaded file
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
});

// card carousel start
// document.addEventListener('DOMContentLoaded', function () {
//     const track = document.querySelector('.carousel-track');
//     const slides = Array.from(track.children);
//     const nextButton = document.getElementById('nextButton');
//     const prevButton = document.getElementById('prevButton');
//     const slidesToShow = 3; // Adjust this value based on the number of cards visible
//     const slideWidth = track.clientWidth / slidesToShow;
//     let currentIndex = 0;

//     function updateCarousel() {
//         track.style.transform = 'translateX(' + (-currentIndex * slideWidth) + 'px)';
//     }

//     nextButton.addEventListener('click', () => {
//         if (currentIndex < slides.length - slidesToShow) {
//             currentIndex++;
//         } else {
//             currentIndex = 0; // Loop back to start
//         }
//         updateCarousel();
//     });

//     prevButton.addEventListener('click', () => {
//         if (currentIndex > 0) {
//             currentIndex--;
//         } else {
//             currentIndex = slides.length - slidesToShow; // Loop back to end
//         }
//         updateCarousel();
//     });

//     window.addEventListener('resize', () => {
//         track.style.transition = 'none'; // Disable transition during resize
//         updateCarousel();
//         setTimeout(() => {
//             track.style.transition = ''; // Re-enable transition after resize
//         });
//     });

//     updateCarousel();
// });
// card carousel end

// footer
import {
    Input,
    Ripple,
    initTWE,
  } from "tw-elements";
  
  initTWE({ Input, Ripple });

  