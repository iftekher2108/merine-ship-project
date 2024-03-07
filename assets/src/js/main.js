console.log($('.slick-slide'))
console.log('iftekher mahmud pervez')
console.log($('.slick-slide'))

// $(document).ready(function(){

// })

// navigation hover effect menu show
$('.menu ul li a.dropdown-toggle,.dropdown-menu').on('mouseenter',function(e){
  e.preventDefault();
  $('.dropdown-menu').addClass('show');
})
$('.dropdown').on('mouseleave',function(){
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
  autoplaySpeed:3000,
})

$('.news-slide').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  autoplay: true,
  infinite:true,
  autoplaySpeed: 1500,
  responsive: [
    {
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
      infinite:true,
      autoplaySpeed: 1000,
    })


    $(document).scroll(function(){
      if($(document).scrollTop() > 15) {
         $('.info-content,.navbar-nav').slideUp(300);
      }
      else {
        $('.info-content,.navbar-nav').slideDown(300);
        
      }
    })


    // mirpur office
    $(".smta-1").click(function(){
      $('.office-1').siblings().fadeOut(300);
      $(".office-1").fadeIn(300);
      $(this).siblings().removeClass('text-white bg-primary').addClass('text-primary')
      $(this).addClass('text-white bg-primary');
      
    })

    // dhaka office 
    $(".smta-2").click(function(){
      $('.office-2').siblings().fadeOut(300);
      $(".office-2").fadeIn(300);
      $(this).siblings().removeClass('text-white bg-primary').addClass('text-primary')
      $(this).addClass('text-white bg-primary');
  
    })