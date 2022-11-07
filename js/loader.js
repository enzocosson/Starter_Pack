const loaderTitre = new SplitType(".loader_titre");
const loaderTitre2 = new SplitType(".loader_titre2");

const loaderBienvenue = new SplitType(".loader_bienvenue");
const loaderBienvenue2 = new SplitType(".loader_bienvenue2");

const loaderInconnu = new SplitType(".loader_inconnu");
const loaderInconnu2 = new SplitType(".loader_inconnu2");

const loaderTitreco = new SplitType(".loader_titre_co");
const loaderTitreCo2 = new SplitType(".loader_titre_co2");

gsap.to(".loader_titre .letter", {
  y: 0,
  stagger: 0.1,
  delay: 0.3,
  duration: 2.5,
  ease: "power4.out",
});

gsap.to(".loader_titre2 .letter", {
  y: 0,
  stagger: 0.1,
  delay: 0.2,
  duration: 2.5,
  ease: "power4.out",
});

gsap.to(".loader_bienvenue .letter", {
  y: 0,
  opacity: 1,
  stagger: 0.1,
  delay: 2.5,
  duration: 1,
  ease: "power4.out",
});
gsap.to(".loader_bienvenue2 .letter", {
  y: 0,
  opacity: 1,
  stagger: 0.1,
  delay: 2.5,
  duration: 1,
  ease: "power4.out",
});

gsap.to(".loader_inconnu .letter", {
  y: 0,
  opacity: 1,
  stagger: 0.1,
  delay: 3.5,
  duration: 1.5,
  ease: "power4.out",
});
gsap.to(".loader_inconnu2 .letter", {
  y: 0,
  opacity: 1,
  stagger: 0.1,
  delay: 3.5,
  duration: 1.5,
  ease: "power4.out",
});

gsap.to(".loader_titre_co .letter", {
  y: 0,
  stagger: 0.05,
  delay: 2.5,
  duration: 1.5,
  ease: "power4.out",
});
gsap.to(".loader_titre_co2 .letter", {
  y: 0,
  stagger: 0.05,
  delay: 2.5,
  duration: 1.5,
  ease: "power4.out",
});
