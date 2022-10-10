// Header Scroll
let nav = document.querySelector(".navbar");
window.onscroll = function () {
  if (document.documentElement.scrollTop > 50) {
    nav.classList.add("header-scrolled");
  } else {
    nav.classList.remove("header-scrolled");
  }
}

// Swiper Slider
var swiper = new Swiper(".mySwiper", {
  direction: "vertical",
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 3500,
  },
})


//Event slider 
var eventswiper = new Swiper(".mySwiperEvent", {
  // cssMode: true,
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
// counter design

// F&B tab toggler for gallery
// $(document).ready(function () {
//   $('.buttons__li').click(function () {
//     $(this).addClass('activate').siblings().removeClass('activate');

//     var filter = $(this).attr('data-filter');

//     if (filter == 'all') {
//       $('.image__item').show(400);
//     } else {
//       $('.image__item').not('.' + filter).hide(200);
//       $('.image__item').filter('.' + filter).show(200);
//     }
//   });
// });




//Date Picker
// $(function() {

//   $('input[name="datefilter"]').daterangepicker({
//       autoUpdateInput: false,
//       locale: {
//           cancelLabel: 'Clear'
//       }
//   });

//   $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
//       $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
//   });

//   $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
//       $(this).val('');
//   });

// });


// -================ Form Data Sending To google Sheet ==========================
const scriptURL = 'https://script.google.com/macros/s/AKfycbyamgakjSYtO3Ay_7oYNleOgAidOcKSQ_E6asbVNZg55uVQ0zT4MmCI4U0OzjGK3OVYiQ/exec'
const form = document.forms['submit-to-google-sheet-contact'];


const message = document.getElementById('msg')

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form) })
    .then(response => {
      message.innerHTML = "Thank you for reaching out, we will get back to you shortly!"
      setTimeout(function () {
        message.innerHTML = ""
      }, 5000)
      form.reset();
    })
    .catch(error => console.error('Error!', error.message))
})
//=============== Booking ===============
const scriptURLs = 'https://script.google.com/macros/s/AKfycby2AcGffVTPrHeLnI8XTV2KAAaNUFpRfKFowvkhE00wivuhwGuX17eDczRqOQqd3Fmt/exec';

const form1 = document.forms['submit-to-google-sheet-booking'];
const message1 = document.getElementById('msg1')



form1.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURLs, { method: 'POST', body: new FormData(form1) })
    .then(response => {
      message1.innerHTML = "Thanks For Submitting Your Request!"
      setTimeout(function () {
        message1.innerHTML = ""
      }, 5000)
      form1.reset();
    })
    .catch(error => console.error('Error!', error.message))
})

//============================ date validation ========================
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("Check-In-Date")[0].setAttribute('min', today);
document.getElementsByName("Check-Out-Date")[0].setAttribute('min', today);

