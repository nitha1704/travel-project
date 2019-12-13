function dropdown() {
    document.querySelector('.hamburgerMenu').classList.toggle("change");

    document.querySelector('.header').classList.toggle("hideDisplay");
    document.querySelector('.carousel-inner').classList.toggle("filterDarker");
    document.querySelector('.carousel-indicators').classList.toggle("hideDisplay");
    document.querySelector('.carousel-control-prev').classList.toggle("hideDisplay");
    document.querySelector('.carousel-control-next').classList.toggle("hideDisplay");
    document.querySelector('.content1').classList.toggle("hideDisplay");
    document.querySelector('.content2').classList.toggle("hideDisplay");
    document.querySelector('.content3').classList.toggle("hideDisplay");
    document.querySelector('.content4').classList.toggle("hideDisplay");
    document.querySelector('.content5').classList.toggle("hideDisplay");
    document.querySelector('.footer').classList.toggle("hideDisplay");
    document.querySelector('.dropdown-item').classList.toggle("showDisplay");

  }

