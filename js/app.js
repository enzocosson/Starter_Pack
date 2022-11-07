const next = document.querySelector(".next");
const prev = document.querySelector(".prev");

let currentClick = 0;

next.addEventListener("click", () => {
  gsap.to(".second", { x: "0%", duration: 0.1, opacity: 1 });
  gsap.to(".first", { x: "0%", duration: 0.1, opacity: 0 });
  currentClick++;
});

prev.addEventListener("click", () => {
  gsap.to(".second", { x: "0%", duration: 0.1, opacity: 0 });
  gsap.to(".first", { x: "0%", duration: 0.1, opacity: 1 });
  currentClick--;
});
