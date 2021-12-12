$(document).ready(function(){

const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnThird = document.querySelector(".prev-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const inputs = document.querySelector(".section__input");

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
});

nextBtnThird.addEventListener("click", function(event){
    event.preventDefault();
    slidePage.style.marginLeft = "-75%";
  });

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
});

prevBtnThird.addEventListener("click", function(event){
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";

  });

  prevBtnFourth.addEventListener("click", function(event){
    event.preventDefault();
    slidePage.style.marginLeft = "-50%";

  });

    new lc_select('select[name="skill_tags[]"]', {
        wrap_width : '100%',
        enable_search : true,
        max_opts : 4,
    });

    new lc_select('select[name="work_activity_tags[]"]', {
        wrap_width : '100%',
        enable_search : true,
        max_opts : 4,
    });

    inputs.addEventListener('focus', function(){
        $('.icon_color').attr("fill", "#333");
    });

    inputs.addEventListener('blur', function(){
        $('.icon_color').attr("fill", "#E7E7E7");
    });


});

