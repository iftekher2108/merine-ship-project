console.log($('.slick-slide'))
console.log('iftekher mahmud pervez')
console.log($('.slick-slide'))

// $(document).ready(function(){

// })


// $(document).on('contextmenu',function(e){
//   e.preventDefault();
//   alert('website content is secure ! ')
// })




// navigation hover effect menu show

$('.dropdown-item').on('mouseenter click mouseleave focus blur', function (e) {
  e.preventDefault();
})


$('.menu ul li a.dropdown-toggle,.dropdown-menu').on('mouseenter click', function (e) {
  e.preventDefault();
  $('.dropdown-menu').addClass('show');
})
$('.dropdown').on('mouseleave', function (e) {
  e.preventDefault();
  $('.dropdown-menu').removeClass('show');
})
// navigation hover effect menu show


$('.custom-slide').slick({
  //     slidesToShow: 1,
  //   slidesToScroll: 1,
  arrows: true,
  dots: true,
  fade: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
})

$('.news-slide').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  autoplay: true,
  infinite: true,
  autoplaySpeed: 1500,
  responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ],
})

$('.partner-slide').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  autoplay: true,
  infinite: true,
  autoplaySpeed: 1000,
})


var lastScrollTop; // This Varibale will store the top position

var navbar = $('.nav-menu')

$(document).scroll(function () {

  if ($(document).scrollTop() < 5) {
    navbar.css({
      'background': 'transparent',
      "box-shadow": "none"
    });
  } else {
    navbar.css({
      'background': '#89caf8',
      'box-shadow': '3px 5px 10px rgba(0,0,0,0.5)'
    });
  }



  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  //This line will get the location on scroll

  if (scrollTop > lastScrollTop) { //if it will be greater than the previous
    navbar.css({
      'top': '-80px',
      'opacity': '0'
    });
    //set the value to the negetive of height of navbar 
  } else {

    navbar.css({
      'top': '0px',
      'opacity': '1'
    });
  }
  lastScrollTop = scrollTop;
})



// mirpur office
$(".smta-1").click(function () {
  $('.office-1').siblings().hide();
  $(".office-1").fadeIn(300);
  $(this).siblings().removeClass('bg-white text-primary').addClass('text-primary')
  $(this).addClass('text-primary bg-white');


})

// dhaka office 
$(".smta-2").click(function () {
  $('.office-2').siblings().hide();
  $(".office-2").fadeIn(300);
  $(this).siblings().removeClass('text-primary bg-white').addClass('text-primary')
  $(this).addClass('text-primary bg-white');

})

// contact form number validation
$("input.number").on('input', function (e) {
  $(this).val($(this).val().replace(/[^0-9]/g, ''));
});





// contact form number validation
$('.close-menu').click(function () {
  $(this).parents().find('.contact-menu').fadeOut(300)
})

$('.contact-us-btn').click(function () {
  $(this).parent('.contact-content').siblings('.contact-menu').fadeIn(300)
})





$(document).ready(function () {

  // country api

  $.get("https://countriesnow.space/api/v0.1/countries",
    function (res, textStatus, jqXHR) {
      $.each(res.data, function (index, value) {
        var html = `<option value="${value.country}">${value.country}</option>`;
        console.log(html);
        $('.country-name').append(html)
      })

    },
    "json"
  );
  // country api
})


// contact form conform
$('.confirm').click(function () {
  $(this).prop('checked', function () {
    if ($(this).is(':checked')) {
      $(this).parents().find('input[type="submit"]').removeAttr('disabled')
    } else {
      $(this).parents().find('input[type="submit"]').attr('disabled', true)
    }
  })
})
// contact form conform