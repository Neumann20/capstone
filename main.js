// JavaScript Document

//select element function


const selectElement = function (element) {
  return document.querySelector(element);

};

let menuToggler = selectElement('.nav');
let body = selectElement('body');

menuToggler.addEventListener('click', function () {
  body.classList.toggle('open');


});


//Scroll reveal


var sr = function ScrollReveal() {

  sr.reveal('.animate-left', {

    origin: 'left',
    duration: 1000,
    distance: '25rem',
    delay: 300
  });


  sr.reveal('.animate-right', {

    origin: 'right',
    duration: 1000,
    distance: '25rem',
    delay: 600
  });


  sr.reveal('.animate-top', {

    origin: 'top',
    duration: 1000,
    distance: '25rem',
    delay: 600
  });


  sr.reveal('.animate-bottom', {

    origin: 'bottom',
    duration: 1000,
    distance: '25rem',
    delay: 600
  });

}
//portfolio display

var $ = (function () {
  var selectedClass = "";
  $(".fil-cat").click(function () {
    selectedClass = $(this).attr("data-rel");
    $(".port-display").fadeTo(100, 0.1);
    $(".port-display div").not("." + selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function () {
      $("." + selectedClass).fadeIn().addClass('scale-anm');
      $(".port-display").fadeTo(300, 1);
    }, 300);

  });
});

//portfolio display
