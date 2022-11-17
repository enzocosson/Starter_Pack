function hoverBa() {
  const containerAffiche = document.querySelectorAll(".container_affiche");
  const bgBa = document.querySelectorAll(".bg_ba");
  const title = document.querySelectorAll(".title");
  const containerIllu = document.querySelectorAll(".container_illu");
  const illu = document.querySelectorAll(".illustration");

  containerAffiche.forEach(function (item) {
    item.addEventListener("mouseover", () => {
      bgBa.forEach(function (item2) {
        item2.classList.add("bg_ba_active");
      });
      title.forEach(function (item3) {
        item3.classList.add("title_active");
      });
      containerIllu.forEach(function (item4) {
        item4.classList.add("container_illu_active");
      });
      illu.forEach(function (item5) {
        item5.classList.add("illustration_active");
      });
    });

    item.addEventListener("mouseout", () => {
      bgBa.forEach(function (item2) {
        item2.classList.remove("bg_ba_active");
      });
      title.forEach(function (item3) {
        item3.classList.remove("title_active");
      });
      containerIllu.forEach(function (item4) {
        item4.classList.remove("container_illu_active");
      });
      illu.forEach(function (item5) {
        item5.classList.remove("illustration_active");
      });
    });
  });
}
hoverBa();

// const containerMovieList = document.querySelectorAll(".container_movie_list");
// const containerIllu = document.querySelectorAll(".container_illu");

// containerMovieList.forEach(function (item) {
//   item.addEventListener("mouseover", (e) => {
//     var valueX = (e.clientX * -1) / 20;
//     var valueY = (e.clientY * -1) / 20;
//     console.log(containerMovieList);

//     containerIllu.forEach(function (item2) {
//       item2.style.transform =
//         "translate(-50%, -50%) translate3d(" +
//         valueX +
//         "px," +
//         valueY +
//         "px,0)";
//     });
//   });
// });
