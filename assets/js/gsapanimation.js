jQuery(document).ready(function () {


  //Gsap animation

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: '.servizi',
      start: '-200 center',
      end: 'top center',
      scrub: true,
      markers: true,
    }
  });
  
  tl.from('.servizi__carousel',  {
    y: 100,
    opacity: 0,
    duration: 2
  })
  tl.to('.hero__box__text', {
    x: -100,
    opacity: 0,
    duration: 2
  })

  //Smooth scroll
  const lenis = new Lenis();

  lenis.on("scroll", (e) => {
    console.log(e);
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);

});
