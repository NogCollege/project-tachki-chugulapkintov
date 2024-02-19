var slider = document.querySelector(".images1");
var prev = document.querySelector(".slider-prev");
var next = document.querySelector(".slider-next");
var slideWidth = document.querySelector(".slider-img").offsetWidth + 20;
var slideNum = 0;
var slidesAll = document.querySelectorAll(".slider-img").length;

next.addEventListener("click", function (evt) {
    evt.preventDefault();
    if (slideNum < slidesAll - 2) {
        slideNum++;
    } else {
        slideNum = 0;
    }
    slider.style.transform = `translateX(-${slideNum * slideWidth}px)`;
});

prev.addEventListener("click", function (evt) {
    evt.preventDefault();
    if (slideNum > 0) {
        slideNum--;
    } else {
        slideNum = slidesAll - 2;
    }
    slider.style.transform = `translateX(-${slideNum * slideWidth}px)`;
});


