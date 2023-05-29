jQuery(document).ready(function () {
  //Hamburger menu
  jQuery(".hamburger").click(function () {
    jQuery(".hamburger").toggleClass("is-active");
    jQuery(".header__nav").toggleClass("open");
  });

  let cursor = document.querySelector(".cursor");
  let outline = document.querySelector(".outline");
  let links = document.querySelectorAll("a");

  document.addEventListener("mousemove", function (e) {
    let x = e.clientX;
    let y = e.clientY;

    outline.style.transform = `translate( calc( ${x}px - 50%), calc( ${y}px - 50%) )`;
    cursor.style.transform = `translate( calc( ${x}px - 50%), calc( ${y}px - 50%) )`;
  });

  links.forEach((link) => {
    link.addEventListener("mouseover", function () {
      outline.classList.add("hover");
      cursor.classList.add("hover");
    });
    link.addEventListener("mouseleave", function () {
      outline.classList.remove("hover");
      cursor.classList.remove("hover");
    });
  });

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });

  //Splide

  var splide = new Splide(".splide", {
    type: "loop",
    perPage: 3,
    breakpoints: {
      1200: { perPage: 2 },
      640: { perPage: 1 },
    },
    focus: 0,
    omitEnd: true,
  });

  splide.mount();

  //GSAP
  
});
