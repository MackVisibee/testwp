console.log("loaded");

function triggerNav() {

  const normalList = document.querySelectorAll(".slider .slick-dots:not(.numbers) li");
  const cloneList = document.querySelectorAll(".slider .slick-dots.numbers li");
  function removeActive(list) {
    list.forEach(each => {
      each.classList.remove("slick-active");
    })
  }
  normalList.forEach((each, index) => {
    each.addEventListener("click", () => {
      removeActive(cloneList);
      cloneList[index].classList.add("slick-active")
    })
  }) 

}
function cloneNav() {
  const ul = document.querySelector(".slider .slick-dots");
  const ulClone = ul.cloneNode(true);
  ulClone.classList.add("numbers");
  const parentDiv = document.querySelector(".slider .e-con-inner");

  parentDiv.appendChild(ulClone);
}
function cloneNavContent() {
  const TestImages = document.querySelectorAll(".testimonial-slider .img");
  const TestStars = document.querySelectorAll(".star");
  const TestNames = document.querySelectorAll(".name");

  addToNav(TestImages);
  addToNav(TestStars);
  addToNav(TestNames);
}
function addToNav(items) {
  const Buttons = document.querySelectorAll(".testimonial-slider .slick-dots li button");
  Buttons.forEach((each, index) => {
    each.appendChild(items[index])
  })
}
jQuery(document).ready(function ($) {

    $('.slider .e-con-inner').on('init', function(event, slick){
      cloneNav();
    });
    $('.slider .e-con-inner').slick({
      centerMode: true,
      centerPadding: '30px',
      slidesToShow: 3,
      dots: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
    triggerNav();
    
    $('.logo-slider .e-con-inner').slick({
      centerMode: true,
      centerPadding: '30px',
      slidesToShow: 5,
      dots: false,
      arrows: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  
    $('.testimonial-slider .e-con-inner').on('init', function(event, slick){
      cloneNavContent();
    });
    $('.testimonial-slider .e-con-inner').slick({
      centerMode: true,
      centerPadding: '30px',
      slidesToShow: 1,
      dots: true,
      arrows: true,
    });
})

  