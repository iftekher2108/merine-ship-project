console.log($('.slick-slide'))
console.log('iftekher mahmud pervez')
console.log($('.slick-slide'))

// $(document).ready(function(){

// })

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
        $('.menu').css({'background':'transparent','transition':'all 0.3s ease-in-out'})
        $('.menu nav').css({'transform':'scaleY(0)','transition':'all 0.3s ease-in-out'});
      }
      else {
        $('.menu nav').css({'transform':'scaleY(1)','transition':'all 0.3s ease-in-out'});
        $('.menu').css({'background':'var(--sp-thin-light)','transition':'all 0.3s ease-in-out'})
      }
    })