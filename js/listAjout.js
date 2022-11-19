const validation = new SplitType(".validation");

gsap.to(".validation .letter", {
  y: 0,
  stagger: 0.05,
  delay: 0.2,
  duration: 2.5,
  ease: "power4.out",
});
